<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Entity\Visit;
use OC\LouvreBundle\Form\ClientType;
use OC\LouvreBundle\Form\TicketType;
use OC\LouvreBundle\Form\VisitType;


class LouvreController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCLouvreBundle:Louvre:index.html.twig');
        return new Response($content);
    }
    
    

    public function dateAction(Request $request)
    {
           
        // On crée un objet Visit
        $visit = new Visit();
        //$form = $this->get('form.factory')->create(VisitType::class, $visit);
        //$form = $this->createForm(VisitType::class, $visit);
        $form = $this->createForm('OC\LouvreBundle\Form\VisitType', null, array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('oc_louvre_date'),
            'method' => 'POST'
        ));
        

        // Si la requête est en POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($visit);
 
            return $this->redirectToRoute('oc_louvre_ticket');
        }
           
        return $this->render('OCLouvreBundle:Louvre:date.html.twig', array(
            'form' => $form->createView()
        ));   

    }
  
/*     public function checkAction()
    {
         $request = $this->container->get('request');

    if($request->isXmlHttpRequest())
    {
        $date = '';
        $date = $request->request->get('date');

        $em = $this->container->get('doctrine')->getEntityManager();

        if($date != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('OCLouvreBundle:Visit', 'a')
                  ->where("a.date LIKE :date")
                  ->setParameter('date', '%'.$date.'%');

               $query = $qb->getQuery();               
               $date = $query->getResult();
        }

        return $this->render('OCLouvreBundle:Louvre:date.html.twig', array(
            'date' => $date
            ));
    }
    else {
        return $this->dateAction();
    }
        
    } */
    
    
    
    
/*    public function checkAction(Request $request, $date)
    {*/
/*        // On récupère le service
        $getcheck = $this->container->get('oc_platform.services');*/
               
/*        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $number = $em->getRepository('LouvreBundle:Visit')->findBy(array('number' => $date));
            
            if ($number) {
                $tab = array();
                foreach($number as $nb) {
                    $tab[] = $nb->getNumber();
            }
        } else {
            $nb = null;
        }
            
        $response = new JsonResponse();
        return $response->setData(array('ville' => $tab));
    } else {
        throw new \Exception('Erreur');
        }
        
    }*/

    
    public function ticketAction(Request $request)
    {   
 
        // On crée un objet Ticket
        $ticket = new Ticket();
        $form = $this->get('form.factory')->create(TicketType::class, $ticket);
        

        // Si la requête est en POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            /*$em->flush();*/
            
            return $this->redirectToRoute('oc_louvre_client');
        }

        return $this->render('OCLouvreBundle:Louvre:ticket.html.twig', array(
            'form' => $form->createView()
        ));   

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
                    
            return $this->redirectToRoute('oc_louvre_resume', array('id' => $ticket->getId()));
        }
        
        return $this->render('OCLouvreBundle:Louvre:client.html.twig', array(
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