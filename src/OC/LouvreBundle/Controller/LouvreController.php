<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Orders;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Form\ClientType;
use OC\LouvreBundle\Form\TicketType;


class LouvreController extends Controller
{
    public function indexAction(Request $request)
    {
    // On crée un objet Client
    $client = new Client();
    $client->setDateVisite(new \Datetime()); 
    $form = $this->get('form.factory')->create(ClientType::class, $client);
        
    // Si la requête est en POST
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        // On enregistre notre objet $client dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Vous pouvez continuer votre commande');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirect('ticket');
    }
    
    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('OCLouvreBundle:Louvre:index.html.twig', array(
      'form' => $form->createView(),
    ));    
    }
     

    
    public function ticketAction(Request $request)
    {
    $ticket = new Ticket();    
        
    $form = $this->get('form.factory')->create(TicketType::class, $ticket); 
    
    // Si la requête est en POST
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
    // On enregistre notre objet $client dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();  
        $em->persist($ticket);
        $em->flush();
        
        $request->getSession()->getFlashBag()->add('notice', 'Vous pouvez finaliser votre commande');  

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirect('orders');
    }    
        
    return $this->render('OCLouvreBundle:Louvre:ticket.html.twig', array(
    'form' => $form->createView(),
    ));    
    }    
        

    
    public function ordersAction(Request $request)
    {        
        
        $em = $this->getDoctrine()->getManager();
        
        // On récupère toutes les entrées possibles
        
        $client = $em->getRepository('OCLouvreBundle:Client')->findAll(); 
               
        $ticket = $em->getRepository('OCLouvreBundle:Ticket')->findAll();       
                
        $orders = new Orders();
        $orders->setCodeReservation('test');
        $orders->setPrixTotal('100');
        $em->persist($orders);
        $em->flush();
        
        $orders = $em->getRepository('OCLouvreBundle:Orders')->findAll();
        
        return $this->render('OCLouvreBundle:Louvre:orders.html.twig', array(
        'orders' => $orders,
        'client' => $client,
        'ticket' => $ticket
        
        ));
    }
    
    
}
