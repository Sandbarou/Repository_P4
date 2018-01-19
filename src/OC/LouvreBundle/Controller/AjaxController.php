<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\Common\Collections\ArrayCollection;
use OC\LouvreBundle\Entity\Client;
use OC\LouvreBundle\Entity\Ticket;
use OC\LouvreBundle\Entity\Visit;
use OC\LouvreBundle\Form\ClientType;
use OC\LouvreBundle\Form\TicketType;
use OC\LouvreBundle\Form\VisitType;


class AjaxController extends Controller
{

    /**
     * @param \Datetime $date
     * @param $number
     * @return array
     */

    private function getAjaxNumberAction(\Datetime $date, $number) {

        $em = $this->getDoctrine()->getManager();
//        $venue = $em->getRepository('OCLouvreBundle:Visit')->findOneBy(array('date' => $date));
        $venue = $em
            ->getRepository('OCLouvreBundle:Visit')
            ->findBy(
                array('date' => $date)
            );

        $sum = 0;
        foreach ($venue as $key=>$value) {
            $value->getNumber();

            if ($value) {
                $nbVisit = $value->getNumber();
                $sum+= $nbVisit;
            } else {
                $sum = 0;
            }

        }
/*        var_dump($sum);
        var_dump($number);
        die();
        */
        return array($sum, $number);

    }

    /**
     * @param \Datetime $date
     * @param $number
     * @return $this
     */
    public function ajaxNumberAction(\Datetime $date, $number) {

        $response = new JsonResponse();
        
        $visite = $this->getAjaxNumberAction($date, $number);

        $service = $this->container->get('oc_louvre.checkNumber');
        
        $result = $service->isFree($visite);
        if ($result) {
            return $response->setData('Vous pouvez poursuivre votre commande !');
        } else {
            return $response->setData('Plus de tickets disponibles. Veuillez sélectionner une autre date. Merci.');
        }

    }

    public function ajaxTotalAction($total) {

        $response = new JsonResponse();
        return $response->setdata($total);
    }


    public function ajaxPriceAction(\Datetime $birthDate) {

        $response = new JsonResponse();

        $service = $this->container->get('oc_louvre.checkPrice');
        $result = $service->ticketPrice($birthDate);

        $montant = 0;

        if ($result <= 1460 AND $montant == 0) {
            return $response->setData('0');
        } elseif ($result <= 1460 AND !$montant == 0) {
            return $response->setData(($montant) + 0);
        }

        if ($result >= 1461 AND $result <= 4382 AND $montant == 0) {
            return $response->setData(8);
        } elseif ($result >= 1461 AND $result <= 4382 AND !$montant == 0) {
            return $response->setData(($montant) + 8);
        }

        if ($result >= 4383 AND $result <= 21914 AND $montant == 0) {
            return $response->setData(16);
        } elseif ($result >= 4383 AND $result <= 21914 AND !$montant == 0) {
            return $response->setData(($montant) + 16);
        }

        if ($result >= 21915 AND $montant == 0){
            return $response->setData(12);
        } elseif  ($result >= 21915 AND !$montant == 0) {
            return $response->setData(($montant) + 12);
        }





        /*            if ($result <= 1460 AND $montant == 0) {
                        return $response->setData(0);
                    } elseif ($result <= 1460 AND !$montant == 0) {
                        return $response->setData(($montant) + 0);
                    }

                    if ($result >= 1461 AND $result <= 4382 AND $montant == 0) {
                        return $response->setData(8);
                    } elseif ($result >= 1461 AND $result <= 4382 AND !$montant == 0) {
                        return $response->setData(($montant) + 8);
                    }

                    if ($result >= 4383 AND $result <= 21914 AND $montant == 0) {
                        return $response->setData(16);
                    } elseif ($result >= 4383 AND $result <= 21914 AND !$montant == 0) {
                        return $response->setData(($montant) + 16);
                    }

                    if ($result >= 21915 AND $montant == 0){
                        return $response->setData(12);
                    } elseif  ($result >= 21915 AND !$montant == 0) {
                        return $response->setData(($montant) + 12);
                    }*/



        return $response->setData($result);

    }








    /**
     * @param Session $session
     * @return RedirectResponse
     */
/*    public function sessionAction(Session $session) {

        // store an attribute for reuse during a later user request
        $session->set('number');

        // get the value of a session attribute
        $number = $session->get('number');

        // use a default value if the attribute doesn't exist
        $number = $session->get('number', 'default_value');

        return $this->redirect($this->generateUrl('oc_louvre_ticket'));
    }*/


    
/*

        $response = new JsonResponse();
        return $response->setData(array($result));

        private function ticketAjaxAction($number) {

            $response = new JsonResponse();
            return $response->setData(array($number));

        }
    
        public function ticketnbAjaxAction($number) {
            
            $nbvisiteur = $this->ticketAjaxAction($number);
            
            $response = new JsonResponse();
            return $response->setData(array($nbvisiteur));
            
        }   
*/

    
        
}    



    
        //$response = new JsonResponse();
         //return $response->setData(array($result));
                
        //$response = new JsonResponse();
        //return $response->setData(array($nbVisit, $number));
    
  /*          $service = $this->container->get('oc_louvre.checkNumber');
        
        //$result = $nbVisit + $number;  
        $result = "9";  
        
        if ($service->isFree($result)) {
            $response = new JsonResponse();
            return $response->setData(array());
        }*/



/*    private function getDateAction(\Datetime $date) {
        
        $em = $this->getDoctrine()->getManager();
        $venue = $em->getRepository('OCLouvreBundle:Visit')->findOneBy(array('date' => $date));
        
        if ($venue) {
            $nbVisit = $venue->getNumber();
        } else {
            $nbVisit = 0;
        }

        //$response = new JsonResponse();
        return $nbVisit;

    }    
    
    
    public function checkDateAction(\Datetime $date) {
        
        $dateVisite = $this->getDateAction($date);
        
        $response = new JsonResponse();
        return $response->setData(array($dateVisite));
        
    }*/
    
 /*   private function getNumberAction($number) {
        
        $service = $this->container->get('oc_louvre.services');
        $text = $this->$number;
        if ($service->isSpam($text)) {
          return true;
        }
        else { return false;
        }
        //$response = new JsonResponse();
        
        return $number;

    }*/
    
/*    public function checkNumberAction($number) {
        
        $numberVisite = $this->getNumberAction($number);
        //$dateVisite = $this->getDateAction($date);
                        
        $service = $this->get('oc_louvre.checkNumber');
        
        //$addition = $numberVisite + 5;
                        
        if ($service->isSpam()) {
            $response = new JsonResponse();
            return $response->setData(array());
        }
        */
        
        
/*         if ($service->isSpam($text, $dateVisite)) {
            die(true);
        } else {
             die(false);
         }*/
             
        //$response = new JsonResponse();
        //return $response->setData(array($numberVisite));
        
    
    
/*    public function getCheckAction(Request $request) {
        
        $service = $this->container->get('oc_louvre.services');
        
        $dateVisite = $this->checkDateAction($date);
        die ($dateVisite);
        
        $text = $this->getNumberAction($number);
        if ($service->isSpam($text)) {
          die('Votre message a été détecté comme spam !');
        }*/
                
     /*   if ($service->isSpam($dateVisite)) {
          die('Votre message a été détecté comme spam !');
        } */

 //  }     
        // On récupère le service
/*      $check = $this->container->get('oc_louvre.services');
        
        $text = 'blablabla';
        if ($check->isSpam($text)) {
          die('Votre message a été détecté comme spam !');
        }*/
         
        
        
        
        
        

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