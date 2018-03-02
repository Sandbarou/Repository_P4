<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class ViewController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCLouvreBundle:Louvre:1_index.html.twig');
        return new Response($content);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function resumeAction(Request $request)
    {
        $session = $request->getSession();
        $visitDay = $session->get('date');
        $quantite = $session->get('number');
        $journee = $session->get('fullday');
        $email = $session->get('email');
        $total = $session->get('total');
        $tickets = $session->get('tickets');

        if (!$visitDay || !$quantite || !$email) {
            throw $this->createNotFoundException('Valeurs incorrectes');
        }

        return $this->render('OCLouvreBundle:Louvre:4_resume.html.twig', array(
            'quantite' => $quantite,
            'visitDay' => $visitDay,
            'journee' => $journee,
            'email' => $email,
            'total' => $total,
            'tickets' => $tickets
        ));

    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function failAction() {

        $session = new Session();

        // set flash messages
        $session->getFlashBag()->add('error', 'Paiement refusé. Veuillez recommencer la saisie.');

        return $this->redirectToRoute('oc_louvre_payment');
    }

}

