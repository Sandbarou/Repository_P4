<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Form\ClientType;
use OC\LouvreBundle\Form\TicketType;

class LouvreController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCLouvreBundle:Louvre:index.html.twig');
        return new Response($content);
    }
    
    
    public function clientAction(Request $request)
    {
        // On crée un objet Client
        $client = new Client();
        $form = $this->get('form.factory')->create(ClientType::class, $client);

        // Si la requête est en POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $client->setCode('test');
            $client->setTotal('100');
            $em->persist($client);
            $em->flush();
        
            return $this->redirectToRoute('oc_louvre_ticket');
        }
        
        return $this->render('OCLouvreBundle:Louvre:client.html.twig', array(
            'form' => $form->createView()
        ));   
        

    }
    
    
    public function ticketAction(Request $request)
    {   
 
        // On crée un objet Ticket
        $ticket = new Ticket();
        $form = $this->get('form.factory')->create(TicketType::class, $ticket);
        

        // Si la requête est en POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            
            return $this->redirectToRoute('oc_louvre_resume', array('id' => $ticket->getId()));
        }

        return $this->render('OCLouvreBundle:Louvre:ticket.html.twig', array(
            'form' => $form->createView()
        ));   

    }
    

    
    public function resumeAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
                
        // Récupération des info client d'id $id
        $client = $em->getRepository('OCLouvreBundle:Client')->find($id);
                
        // Récupération de la liste des tickets associés au client
        $listTickets = $em
          ->getRepository('OCLouvreBundle:Ticket')
          ->findBy(array('client' => $client));
        
/*        $listTickets = $em
          ->getRepository('OCLouvreBundle:Ticket')
          ->findBy(array('id' => $id));
        */
        
        return $this->render('OCLouvreBundle:Louvre:resume.html.twig', array(
            'id' => $id,
            'client' => $client,
            'listTickets' => $listTickets
        ));    
        
    }
    
    
    public function confirmAction()
    {
        /* ------------ */
    }
    
    public function failAction()
    {
        /* ------------ */
    }
      
    public function errorAction()
    {
        /* ------------ */
    }
          
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}