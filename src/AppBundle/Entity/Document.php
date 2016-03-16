<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Entity
 * @ORM\Table(name="document")
 */
class Document {
    
    
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
     * @ORM\ManyToOne(targetEntity="Partner")
     * @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     */
    private $partner;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="DocType")
     * @ORM\JoinColumn(name="doc_type_id", referencedColumnName="id")
     */
    private $docType;
    
    /**
     *
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="PaymentType")
     * @ORM\JoinColumn(name="payment_type_id", referencedColumnName="id")
     */
    private $paymentType;
    
    
    
    private $user;
    
    /**
     *
     * @var int
     * 
     * @ORM\OneToMany(targetEntity="DocumentLine", mappedBy="document")
     */
    private $documentLines;
    
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="doc_number", type="string")
     */
    private $docNumber;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="doc_status", type="string")
     */
    private $docStatus;

    
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
    
    
}   // end Document
