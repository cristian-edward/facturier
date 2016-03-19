<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 *
 * @ORM\Entity
 * @ORM\Table(name="feature")
 */
class Feature {
    
    
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
     * @var int 
     * 
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="images") 
     */
    private $products;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="FeatureName")
     * @ORM\JoinColumn(name="name_id", referencedColumnName="id")
     */
    private $name;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="value", type="string")
     */
    private $value;
    
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
    
    
}   // end Feature
