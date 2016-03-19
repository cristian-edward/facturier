<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 *
 * @ORM\Entity
 * @ORM\Table(name="product_warehouse")
 */
class ProductWarehouse {
    
    
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
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productWarehouse")
     */
    private $product;
    
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Warehouse")
     * @ORM\JoinColumn(name="warehouse_id", referencedColumnName="id")
     */
    private $warehouse;
    
    /**
     *
     * @var int
     * 
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;
    
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
    
    
}   // end ProductWarehouse
