<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product {
    
    
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
     * @var  int
     * 
     * @ORM\ManyToOne(targetEntity="UnitMeasure")
     * @ORM\JoinColumn(name="unit_masure_id", referencedColumnName="id")
     */
    private $unitMasure;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
     * @ORM\JoinTable(name="productc_category")
     */
    private $categories;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToMany(targetEntity="Feature", inversedBy="products")
     * @ORM\JoinTable(name="productc_feature")
     */
    private $features;
    
    /**
     *
     * @var int
     * 
     * @ORM\OneToMany(targetEntity="ProductWarehouse", mappedBy="product")
     */
    private $productWarehouse;
    
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="manufacturer", type="string")
     */
    private $manufacturer;
    
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="referemce", type="string")
     */
    private $reference;
    
    
    /**
     *
     * @var float
     * 
     * @ORM\Column(name="sale_price", type="float")
     */
    private $salePrice;
    
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="ean", type="string")
     */
    private $ean;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToMany(targetEntity="ProductImage", inversedBy="products")
     */
    private $images;
    
    /**
     *
     * @var datetime
     * 
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    private $datUpd;
    
    /**
     *
     * @var datetime
     * 
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    private $datCre;
    
    
}   // end Product
