<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentLine
 *
 * @ORM\Entity
 * @ORM\Table(name="document_line")
 */
class DocumentLine {
    
    
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
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
    
    /**
     *
     * @var int
     * 
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;
    
    /**
     *
     * @var float
     * 
     * @ORM\Column(name="sale_price", type="float")
     */
    private $salePrice;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="documentLines")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     */
    private $document;
    
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="VatRate")
     * @ORM\JoinColumn(name="vat_rate_id", referencedColumnName="id")
     */
    private $vatRate;
    
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
    
    
}   // end DocumentLine
