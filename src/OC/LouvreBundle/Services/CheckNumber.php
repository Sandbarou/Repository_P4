<?php

namespace OC\LouvreBundle\Services;



class CheckNumber
{
  /**
   *
   * @param int $text
   * @return bool
   */

        public function isFree($result)
    {
       if (($result[0] + $result[1]) < 1001) {
           return true;
       } else {
           return false;
       }  
            
    }
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*        $em = $this->getDoctrine()->getManager();
        $venue = $em->getRepository('OCLouvreBundle:Visit')->findOneBy(array('date' => $date));
        
        if ($venue) {
            $nbVisit = $venue->getNumber();
        } else {
            $nbVisit = 0;
        }  */
          
          
      //return $text < 5;
/*      if ($text+$dateVisite > 1000) {
          return 'NON';
      } else {
          return 'OUI';
      }
      */
        //$dateVisite = $this->getDateAction($date);
       // $numberVisite = $this->getNumberAction($number);
      
      //  $addition = $numberVisite + 5;
        //$addition = $numberVisite + $dateVisite;
      
       // return $addition;
/*       if ($addition) {
            $result > 1000;
        } else {
            $result < 1000;
        }*/
      //return $result;
      
      
/*      if ($text <= 5)
        {
            return "Salut gamin !";
        } else {
          return "trop vieux";
      }*/



    
/*    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->em = $entityManager;
        $this->container = $container;
    }
    
        
    public function findNumbersByDate($date) {
        $qb = $this->em->createQueryBuilder();
        
        $qb->select('n')
           ->from('LouvreBundle:Visit', 'n')
           ->where('n.date LIKE :date')
           ->setParameter('date', '%"' . $date . '"%');
        
        return $qb->getQuery()->getResult();
    }
    */
/*    public function isFree() {
        
        $isfree = $this->em->getRepository('LouvreBundle:Visit')->findOneBy(array('valider' => 1), array('id' => 'DESC'),1,1);
        
        if (!$reference)
            return 1;
        else 
            return $reference->getReference() +1;
            
                 
    }*/
    
//    recup nb si nb + nb saisi sup à 1000 erreur sinon ok