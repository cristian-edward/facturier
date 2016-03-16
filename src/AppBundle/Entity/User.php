<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="username", type="string")
     */
    private $username;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="email", type="string")
     */
    private $email;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="password", type="string")
     */
    private $password;
    
    /**
     *
     * @var int
     * 
     * @ORM\Column(name="roles", type="integer")
     */
    private $roles;
    
    /**
     *
     * @var \DateTime 
     * 
     * 
     * @ORM\Column(name="datUpd", type="datetime")
     */
    private $datUpd;
    
    /**
     *
     * @var \DateTime 
     * 
     * 
     * @ORM\Column(name="datCre", type="datetime")
     */
    private $datCre;
    
    
}   // end User
