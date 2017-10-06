<?php

namespace OC\LouvreBundle\Services;

use Doctrine\ORM\EntityManager;.
use Symfony\Component\DependencyInjection\Container;

class GetCheck
{
    
    
    
    
    
    
    
    
    
    
    
}


    
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