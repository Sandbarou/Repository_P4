<?php

namespace Tests\OC\LouvreBundle\Services;

use OC\LouvreBundle\Services\CheckPrice;
use PHPUnit\Framework\TestCase;

class CheckPriceTest extends TestCase
{

    public function testTicketPrice()
    {
        $prix = new CheckPrice();

        $birthDate = '1979-10-10 00:00:00';
        $date = new \DateTime($birthDate);
        $journee = false;
        $reduit = true;

        $age = $prix->ticketPrice($date, $reduit, $journee);

        $this->assertEquals(10, $age);

    }


}

