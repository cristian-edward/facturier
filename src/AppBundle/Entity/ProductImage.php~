<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductImage
 *
 * @ORM\Entity
 * @ORM\Table(name="product_image")
 */
class ProductImage {
    
    
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
     * @var string
     * 
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="path", type="string")
     */
    private $path;

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
    
    
}   // end ProductImage
