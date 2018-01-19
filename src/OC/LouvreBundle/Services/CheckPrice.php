<?php

namespace OC\LouvreBundle\Services;

class CheckPrice
{


    /**
     * @param $result
     * @return mixed
     */
    public function ticketPrice($result)
    {


        $today = new \DateTime('today');
        $age = DATE_DIFF($result, $today)->days;

        return $age;

    }

}

