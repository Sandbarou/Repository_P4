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

