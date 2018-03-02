<?php

namespace OC\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Visit
 *
 * @ORM\Table(name="visit")
 * @ORM\Entity(repositoryClass="OC\LouvreBundle\Repository\VisitRepository")
 */
class Visit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     * @Assert\NotBlank()
     * @Assert\Date()
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     */
    private $number;

    /**
     * @var bool
     *
     * @ORM\Column(name="fullday", type="boolean")
     * @Assert\Type(type="bool")
     */
    private $fullday;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Visit
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;

    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Visit
     */
    public function setNumber($number)
    {
        $this->number = $number;

    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set fullday
     *
     * @param boolean $fullday
     *
     * @return Visit
     */
    public function setFullday($fullday)
    {
        $this->fullday = $fullday;

    }

    /**
     * Get fullday
     *
     * @return boolean
     */
    public function getFullday()
    {
        return $this->fullday;
    }

}


