<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Entity\Visit;
use OC\LouvreBundle\Form\Type\ClientType;
use OC\LouvreBundle\Form\Type\VisitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;


class LouvreController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
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

            return $this->redirectToRoute('oc_louvre_today', array(
                'data' => $visit,
            ));

        }

        return $this->render('OCLouvreBundle:Louvre:2_date.html.twig', array(
            'visit' => $visit,
            'form' => $form->createView()
        ));

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function todayAction(Request $request)
    {
        $session = $request->getSession();
        $visitDay = $session->get('date');

        $today = new \DateTime('today');
        date_default_timezone_set("Europe/Paris");
        $now = date("G:i:s");

        if ($visitDay == $today && $now >= "14:00:00") {

            $session->set('fullday', true);

            return $this->redirectToRoute('oc_louvre_commande');

        }

        return $this->redirectToRoute('oc_louvre_commande');

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function commandeAction(Request $request)
    {
        $session = $request->getSession();
        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');

        if (!$visitDay || !$quantite) {
            throw $this->createNotFoundException('Date ou nombre incorrect');
        }

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


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function prixAction(Request $request)
    {
        $session = $request->getSession();
        $journee = $session->get('fullday');
        $tickets = $session->get('tickets');

        $total = 0;

        foreach ($tickets as $key=>$ticket) {
            $ticket->getClient();

            if ($ticket) {
                $anniv = $ticket->getBirthDate();
                $reduit = $ticket->getDiscount();

                $service = $this->container->get('oc_louvre.checkPrice');
                $prixunit = $service->ticketPrice($anniv, $reduit, $journee);

                $total+= $prixunit;
                $session->set('total', $total);

            }
        }

        return $this->redirectToRoute('oc_louvre_resume', array(
            'total' => $total
        ));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function paymentAction(Request $request) {

        $session = $request->getSession();
        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $total = $session->get('total');

        if (!$total || $total <= 0) {
            return $this->redirectToRoute('oc_louvre_date');
        }

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
                    \Stripe\Stripe::setApiKey('sk_test_XEkLEkLehELOTwUehELOXXXX');

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
            'quantite' => $quantite,
            'visitDay' => $visitDay,
            'total' => $total,
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
            'form' => $form->createView()
        ));

    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
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

}


