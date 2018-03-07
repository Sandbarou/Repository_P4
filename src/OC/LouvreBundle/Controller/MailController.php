<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MailController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function mailAction(Request $request) {

        $session = $request->getSession();

        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');
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

        $this->sendEmail($visitDay, $quantite, $journee, $email, $total, $tickets, $code);

        return $this->redirectToRoute('oc_louvre_done');
    }

    /**
     * @param $visitDay
     * @param $quantite
     * @param $journee
     * @param $email
     * @param $total
     * @param $tickets
     * @param $code
     * @return int
     */
    private function sendEmail($visitDay, $quantite, $journee, $email, $total, $tickets, $code){
        $myappContactMail = 'mail@mail.fr';
        $myappContactPassword = 'password';

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
                    'visitDay' => $visitDay,
                    'quantite' => $quantite,
                    'journee' => $journee,
                    'email' => $email,
                    'total' => $total,
                    'tickets' => $tickets,
                    'code' => $code
                )),
                'text/html');

        return $mailer->send($message);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doneAction(Request $request) {

        $session = $request->getSession();

        $email = $session->get('email');

        $this->get('session')->clear();

        if (!$email) {
            throw $this->createNotFoundException('Email incorrect');
        }

        return $this->render('OCLouvreBundle:Louvre:6_done.html.twig', array(
            'email' => $email
        ));

    }

}


