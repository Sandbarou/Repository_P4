<?php

namespace Tests\OC\LouvreBundle\Services;

use OC\LouvreBundle\Services\CheckNumber;
use PHPUnit\Framework\TestCase;

class CheckNumberTest extends TestCase
{

    public function testIsFree()
    {
        $nombre = new CheckNumber();

        $result[0] = 485;
        $result[1] = 5;

        $complet = $nombre->isFree($result);

        $this->assertFalse($complet < 1000);

    }


}

