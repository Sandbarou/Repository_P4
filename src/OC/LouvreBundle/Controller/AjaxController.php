<?php

namespace OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class AjaxController extends Controller
{

    /**
     * @param \Datetime $date
     * @param $number
     * @return array
     */

    private function getAjaxNumberAction(\Datetime $date, $number) {

        $em = $this->getDoctrine()->getManager();

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


}
