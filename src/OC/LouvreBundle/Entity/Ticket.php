<?php

namespace OC\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="OC\LouvreBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le prénom doit faire au moins {{ limit }} caractères.")
     */
    private $firstName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le nom doit faire au moins {{ limit }} caractères.")
     */
    private $lastName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le pays doit faire au moins {{ limit }} caractères.")
     */
    private $country;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="birthDate", type="date")
     * @Assert\Date()
     */
    private $birthDate;    
    
    
    /**
     * @var bool
     *
     * @ORM\Column(name="discount", type="boolean")
     */
    private $discount;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\LouvreBundle\Entity\Client", inversedBy="tickets", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $client;    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->birthDate = new \Datetime();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Ticket
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Ticket
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Ticket
     */
    public function setCountry($country)
    {
        $this->country = $country;

    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Ticket
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set discount
     *
     * @param boolean $discount
     *
     * @return Ticket
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

    }

    /**
     * Get discount
     *
     * @return boolean
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set client
     *
     * @param Client $client
     *
     */
    public function setClient(Client $client)
    {
        $this->client = $client;

    }

    /**
     * Get client
     *
     * @return \OC\LouvreBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
