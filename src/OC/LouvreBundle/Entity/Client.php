<?php

namespace OC\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="OC\LouvreBundle\Repository\ClientRepository")
 */
class Client
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(message="Adresse email non valide")
     */
    private $email;

    
    /**
     * @var \Date
     *
     * @ORM\Column(name="dateVisite", type="date")
     * @Assert\Date()
     */
    private $dateVisite;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="nombreTicket", type="integer")
     */
    private $nombreTicket;
    
    /**
     * @ORM\OneToOne(targetEntity="OC\LouvreBundle\Entity\Ticket", cascade={"persist"})
     */
    private $ticket;
    
        

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateVisite
     *
     * @param \Date $dateVisite
     *
     * @return Client
     */
    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    /**
     * Get dateVisite
     *
     * @return \Date
     */
    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    /**
     * Set nombreTicket
     *
     * @param integer $nombreTicket
     *
     * @return Client
     */
    public function setNombreTicket($nombreTicket)
    {
        $this->nombreTicket = $nombreTicket;

        return $this;
    }

    /**
     * Get nombreTicket
     *
     * @return integer
     */
    public function getNombreTicket()
    {
        return $this->nombreTicket;
    }

    /**
     * Set ticket
     *
     * @param \OC\LouvreBundle\Entity\Ticket $ticket
     *
     * @return Client
     */
    public function setTicket(\OC\LouvreBundle\Entity\Ticket $ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \OC\LouvreBundle\Entity\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}
