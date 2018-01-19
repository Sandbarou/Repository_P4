<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Flosch\Bundle\StripeBundle\Stripe\StripeClient;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Entity\Visit;
use OC\LouvreBundle\Form\ClientType;
use OC\LouvreBundle\Form\TicketType;
use OC\LouvreBundle\Form\VisitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;


class LouvreController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCLouvreBundle:Louvre:1_index.html.twig');
        return new Response($content);
    }

    public function dateAction(Request $request)
    {
        $visit = new Visit();
        $form = $this->createForm(VisitType::class, $visit);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $visit = $form->getData();

            $session = $this->get('session');
            $session->set('date', $visit->getDate());
            $session->set('number', $visit->getNumber());
            $session->set('fullday', $visit->getFullday());


            return $this->redirectToRoute('oc_louvre_commande', array(
                'data' => $visit,
            ));

        }

        return $this->render('OCLouvreBundle:Louvre:2_date.html.twig', array(
            'visit' => $visit,
            'form' => $form->createView()
        ));

    }

    public function commandeAction(Request $request)
    {
        $session = $request->getSession();
        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');

        $client = new Client();
        $ticket = new Ticket();
        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = $form->getData();
            $tickets = $form->get('tickets')->getData();

            $session = $this->get('session');
            $session->set('email', $client->getEmail());
            $session->set('tickets', $client->getTickets());

            return $this->redirectToRoute('oc_louvre_prix', array(
                'data' => $client,
                'tickets' => $tickets
            ));

        }

        return $this->render('OCLouvreBundle:Louvre:3_commande.html.twig', array(
            'client' => $client,
            'ticket' => $ticket,
            'quantite' => $quantite,
            'visitDay' => $visitDay,
            'journee' => $journee,
            'form' => $form->createView()
        ));

    }


    public function prixAction(Request $request)
    {
        $client = new Client();

        $session = $request->getSession();
        $journee = $session->get('fullday');
        $tickets = $session->get('tickets');

        $prixunit = 0;
        $total = 0;

// todo         $journee

        foreach ($tickets as $key=>$ticket) {
            $ticket->getClient();

            if ($ticket) {
                $anniv = $ticket->getBirthDate();
                $reduit = $ticket->getDiscount();

                $service = $this->container->get('oc_louvre.checkPrice');
                $result = $service->ticketPrice($anniv);

                if ($result <= 1460) {
                    $prixunit = 0;
                } elseif ($reduit == true) {
                    $prixunit = 10;
                } elseif ($result >= 1461 AND $result <= 4382 AND $reduit == false) {
                    $prixunit = 8;
                } elseif ($result >= 4383 AND $result <= 21914 AND $reduit == false) {
                    $prixunit = 16;
                } elseif ($result >= 21915 AND $reduit == false) {
                    $prixunit = 12;
                }

                $total+= $prixunit;
                $session->set('total', $total);

            }
        }

        return $this->redirectToRoute('oc_louvre_resume', array(
            'total' => $total
        ));
    }

//todo changer chemin validation -> payment
    public function resumeAction(Request $request)
    {
        $session = $request->getSession();
        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');
        $email = $session->get('email');
        $total = $session->get('total');
        $tickets = $session->get('tickets');

//todo twig tarif réduit affiche 1

        return $this->render('OCLouvreBundle:Louvre:4_resume.html.twig', array(
            'quantite' => $quantite,
            'visitDay' => $visitDay,
            'journee' => $journee,
            'email' => $email,
            'total' => $total,
            'tickets' => $tickets
        ));

    }

    public function paymentAction(Request $request) {

//todo passer sk_test en paramètres

        $session = $request->getSession();
        $total = $session->get('total');

        $form = $this->get('form.factory')
            ->createNamedBuilder('payment-form')
            ->add('token', HiddenType::class, [
                'constraints' => [new NotBlank()],
            ])
            ->add('Payer', SubmitType::class)
            ->getForm();

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $token = $form->get('token')->getData();

                try {
                    // Set your secret key: remember to change this to your live secret key in production
                    // See your keys here: https://dashboard.stripe.com/account/apikeys
                    \Stripe\Stripe::setApiKey("sk_test_EkL7JkTwUyehELO9DCPi7rO7");

                    // Charge the user's card:
                    \Stripe\Charge::create(array(
                        "amount" => $total * 100,
                        "currency" => "eur",
                        "description" => "Achat de billets Le Louvre",
                        "source" => $token,
                    ));

                    return $this->redirectToRoute('oc_louvre_confirm');

                } catch (\Stripe\Error\Base $e) {

                    return $this->redirectToRoute('oc_louvre_fail');

                }
            }
        }

        return $this->render('OCLouvreBundle:Louvre:5_payment.html.twig', array(
            'total' => $total,
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
            'form' => $form->createView()
        ));

    }


    public function confirmAction(Request $request)
    {

        $visit = new Visit();
        $client = new Client();
        $ticket = new Ticket();

        $session = $request->getSession();

        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');
        $email = $session->get('email');
        $total = $session->get('total');
        $tickets = $session->get('tickets');

        /*        $em = $this->getDoctrine()->getManager();
                $verifDate = $em->getRepository('OCLouvreBundle:Visit')->findOneBy(array('date' => $visitDay));

                if (!$verifDate) {
                    $visit->setDate($visitDay);
                    $visit->setNumber($quantite);
                } else {
                    $addNumber = $verifDate->getNumber() + $quantite;
                    $visit->setNumber($addNumber);
                }*/

        $visit->setDate($visitDay);
        $visit->setNumber($quantite);
        $visit->setFullday($journee);

        $client->setEmail($email);
        $serial = $this->get('oc_louvre.orderSerial')->createSerial();
        $client->setCode($serial);
        $client->setTotal($total);


        foreach ($tickets as $ticket) {
            $ticket->getClient();
            $ticket->setClient($client);
            $client->addTicket($ticket);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($visit);
        $em->persist($client);
        $em->persist($ticket);

        $em->flush();

        return $this->redirectToRoute('oc_louvre_mail', array(
            'visit' => $visit,
            'client' => $client,
            'ticket' => $ticket,
            'quantite' => $quantite,
            'visitDay' => $visitDay,
            'journee' => $journee,
            'email' => $email,
            'total' => $total,
            'tickets' => $tickets
        ));
    }




    public function mailAction(Request $request) {

        $session = $request->getSession();

        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $email = $session->get('email');
        $total = $session->get('total');
        $tickets = $session->get('tickets');

        $em = $this->getDoctrine()->getManager();
        $code = $em->getRepository('OCLouvreBundle:Client')->findBy(
            array('email' => $email),
            array('id' => 'desc'),
            $limit  = 1,
            $offset = 0
        );

        $this->sendEmail($visitDay, $quantite, $email, $total, $tickets, $code);

        return $this->redirectToRoute('oc_louvre_done');
    }




    private function sendEmail($visitDay, $quantite, $email, $total, $tickets, $code){
        $myappContactMail = 'lelouvre-billetterie@sandrinebarou.fr';
        $myappContactPassword = 'OC_cpmdevP4**';

        $transport = \Swift_SmtpTransport::newInstance('SSL0.OVH.NET', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance("Vos tickets pour le Louvre")
            ->setFrom(array($myappContactMail => 'Le Louvre - Billetterie en ligne'))
            ->setTo(array(
                // ici email de la personne qui achète
                $email => "Votre email :".$email
            ))
            ->setBody(
                $this->renderView(
                    'emails/email.html.twig', array(
                        'quantite' => $quantite,
                        'visitDay' => $visitDay,
                        'email' => $email,
                        'total' => $total,
                        'tickets' => $tickets,
                        'code' => $code
                        )),
                'text/html');

        return $mailer->send($message);
    }


    public function doneAction(Request $request) {

        //todo ok flashbag et accès repository -> résumé achats
        //todo url bizarre

        $session = $request->getSession();

        $email = $session->get('email');

        return $this->render('OCLouvreBundle:Louvre:6_done.html.twig', array(
            'email' => $email
        ));
    }

    public function failAction() {

        //todo error flashbag sur payment
        //todo vérifier si session ok

        echo 'Pas bon';

        die();

        $content = $this->get('templating')->render('OCLouvreBundle:Louvre:5_payment.html.twig');
        return new Response($content);

    }

    public function errorAction() {

        //todo créer 404 et rajouter exception dans les controllers

        die();

    }

    /*var_dump($session->get('date'));
    var_dump($session->get('number'));
    var_dump($visit);

    die();*/

    //$form = $this->createForm(VisitType::class, $visit);
    //$form->get('date')->setData($session->get('date'));
    //$form->get('number')->setData($session->get('number'));
    //$visit = $form->getData();

    //var_dump($visit = $form->getData());














}