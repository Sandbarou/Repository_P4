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
        $today = new \DateTime('today');

        $age = $prix->ticketPrice($date, $today);

        $this->assertEquals(13987, $age);

    }


}

