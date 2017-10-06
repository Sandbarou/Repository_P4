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



class AjaxController extends Controller
{
    public function getDateAction(\Datetime $date) {
        
        $em = $this->getDoctrine()->getManager();
        $venue = $em->getRepository('OCLouvreBundle:Visit')->findOneBy(array('date' => $date));
        
        if ($venue) {
            $nbVisit = $venue->getNumber();
        } else {
            $nbVisit = 0;
        }

        $response = new JsonResponse();
        return $response->setData(array($nbVisit));
      
        }    
        
}
/*        
die($test);
$response = new JsonResponse();
        return $response->setData($date);*/
        

    
    /*        if ($request->isXMLHttpRequest()) {
                $datevisite = $request->get('date');
                $nbvisiteur = $request->get('number');
                $connect = $this->get('database_connection');
                $query = "select * from visit where visit.date = " . $datevisite;
                $rows = $connect->fetchAll($query);
                return new JsonResponse(array('data' => json_encode($rows)));
        }
        
        return new Response("Erreur :  ce n'est pas une requête Ajax", 400); 
    }*/
    
    

            //if ($request->isXMLHttpRequest()) {
   /*          $datevisite = $request->get('date');
             $nbvisiteur = $request->get('number');
             
            // get some data
        $em = $this->getDoctrine()->getManager();
            
        $datadate = */
        
             //$connect = $this->get('database_connection');
            // $query = "select * from visit where visit.date = " . $datevisite;
            // $rows = $connect->fetchAll($query);
            // return new JsonResponse(array('data' => json_encode($rows)));
        //}    

/*            return new Response("Erreur :  ce n'est pas une requête Ajax", 400);            
        }*/

/*    public function getDateAction($date) {
        // get some data
        $em = $this->getDoctrine()->getManager();

        // this example shows retrieving user data
        // implement your logic for retrieving projecty by user id here
        $userData = $em->getRepository('LouvreBundle:Visit')->findOneBy(array('date' => $date));

        return $this->render('user.data.html.twig', array('user' => $userData));
    }*/