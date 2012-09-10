<?php

namespace Chat\ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chat\ChatBundle\Entity\Messages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Chat\ChatBundle\Entity\MessagesRepository")
 */
class Messages
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $message
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Chat\ChatBundle\Entity\User")
     */
    private $user;
    
    public function __construct()
    {
    	$this->setDate(new \DateTime());
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
     * Set message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param Chat\ChatBundle\Entity\User $user
     */
    public function setUser(\Chat\ChatBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Chat\ChatBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}