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
     * @Assert\NotBlank()
     * @Assert\Email(
     *   message="L'adresse email '{{ value }}' n'est pas valide."
     * )
     */
    private $email;
    
    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     * @Assert\Type(
     *   type="integer",
     *   message="La valeur {{ value }} n'est pas valide."
     * )
     */
    private $total;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     * @Assert\Length(max=4)
     */
    private $code;
    
    /**
     * @ORM\OneToMany(targetEntity="OC\LouvreBundle\Entity\Ticket", mappedBy="client", cascade={"persist", "remove"})
     * @Assert\Valid
     */
    private $tickets;    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new ArrayCollection();
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
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Set total
     *
     * @param integer $total
     *
     * @return Client
     */
    public function setTotal($total)
    {
        $this->total = $total;

    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Client
     */
    public function setCode($code)
    {
        $this->code = $code;

    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add ticket
     *
     * @param Ticket $ticket
     *
     */
    public function addTicket(Ticket $ticket)
    {
        $this->tickets[] = $ticket;
        
        // On lie le client au ticket
        $ticket->setClient($this);

    }

    /**
     * Remove ticket
     *
     * @param Ticket $ticket
     */
    public function removeTicket(Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTickets()
    {
        return $this->tickets;
    }


}
