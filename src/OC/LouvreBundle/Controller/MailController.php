<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MailController extends Controller
{
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
            array('id' => 'desc')
        );

        $this->sendEmail($visitDay, $quantite, $email, $total, $tickets, $code);

        return $this->redirectToRoute('oc_louvre_done');
    }




    private function sendEmail($visitDay, $quantite, $email, $total, $tickets, $code){
        $myappContactMail = 'mail@mail.com';
        $myappContactPassword = 'password';

        $transport = \Swift_SmtpTransport::newInstance('SSL0.OVH.NET', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance("Vos tickets pour le Louvre")
            ->setFrom(array($myappContactMail => 'Le Louvre - Billetterie en ligne'))
            ->setTo(array(
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

        $session = $request->getSession();

        $email = $session->get('email');
        $visitDay = $session->get('date');
        $total = $session->get('total');
        $tickets = $session->get('tickets');


        return $this->render('OCLouvreBundle:Louvre:6_done.html.twig', array(
            'email' => $email,
            'visitDay' => $visitDay,
            'total' => $total,
            'tickets' => $tickets
        ));
    }


}


