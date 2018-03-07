<?php

namespace OC\LouvreBundle\Services;

use Doctrine\ORM\EntityManager;

class OrderSerial
{
    protected $em;

    /**
     * OrderSerial constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return string
     */
    public function createSerial()
    {
        $template = 'XX999999';
        $k = strlen($template);
        $serial = '';
        for ($i = 0; $i < $k; $i++) {
            switch ($template[$i]) {
                case 'X':
                    $serial .= chr(rand(65, 90));
                    break;
                case '9':
                    $serial .= rand(0, 9);
                    break;
            }
        }

        $repository = $this->em->getRepository('OC\LouvreBundle\Entity\Client');

        $serialUsed = $repository->findOneBy(['code' => $serial]);


        while (!is_null($serialUsed)) {
            for ($i = 0; $i < $k; $i++) {
                switch ($template[$i]) {
                    case 'X':
                        $serial .= chr(rand(65, 90));
                        break;
                    case '9':
                        $serial .= rand(0, 9);
                        break;
                }
            }

            $serialUsed = $repository->findOneBy(['code' => $serial]);
        }

        return $serial;

    }

}

