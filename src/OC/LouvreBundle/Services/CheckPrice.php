<?php

namespace OC\LouvreBundle\Services;

class CheckPrice
{

    /**
     * @param $result
     * @return mixed
     */
    public function ticketPrice($anniv, $reduit, $journee)
    {

        $prixunit = 0;

        $today = new \DateTime('today');
        $age = DATE_DIFF($anniv, $today)->days;

        if ($age <= 1460 && $reduit === true) {
            $prixunit = 0;
        } elseif ($age <= 1460 && $reduit === false) {
            $prixunit = 0;
        } elseif ($age >= 1461 && $age <= 4382 && $reduit === true) {
            $prixunit = 8;
        } elseif ($age >= 1461 && $age <= 4382 && $reduit === false) {
            $prixunit = 8;
        } elseif ($age >= 4383 && $age <= 21914 && $reduit === false) {
            $prixunit = 16;
        } elseif ($age >= 4383 && $age <= 21914 && $reduit === true) {
            $prixunit = 10;
        } elseif ($age >= 21915 && $reduit === false) {
            $prixunit = 12;
        } elseif ($age >= 21915 && $reduit === true) {
            $prixunit = 10;
        }

        if ($journee === true) {
            $prixunit = $prixunit/2;
        }

        return $prixunit;

    }

}


