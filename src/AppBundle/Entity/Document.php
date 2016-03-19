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
    
    
    /**
     *
     * @var int
     * 
     * 
     */
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
     * @ORM\ManyToOne(targetEntity="DocStatus")
     * @ORM\JoinColumn(name="doc_status_id", referencedColumnName="id")
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
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documentLines = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set docNumber
     *
     * @param string $docNumber
     *
     * @return Document
     */
    public function setDocNumber($docNumber)
    {
        $this->docNumber = $docNumber;

        return $this;
    }

    /**
     * Get docNumber
     *
     * @return string
     */
    public function getDocNumber()
    {
        return $this->docNumber;
    }

    /**
     * Set datUpd
     *
     * @param \DateTime $datUpd
     *
     * @return Document
     */
    public function setDatUpd($datUpd)
    {
        $this->datUpd = $datUpd;

        return $this;
    }

    /**
     * Get datUpd
     *
     * @return \DateTime
     */
    public function getDatUpd()
    {
        return $this->datUpd;
    }

    /**
     * Set datCre
     *
     * @param \DateTime $datCre
     *
     * @return Document
     */
    public function setDatCre($datCre)
    {
        $this->datCre = $datCre;

        return $this;
    }

    /**
     * Get datCre
     *
     * @return \DateTime
     */
    public function getDatCre()
    {
        return $this->datCre;
    }

    /**
     * Set partner
     *
     * @param \AppBundle\Entity\Partner $partner
     *
     * @return Document
     */
    public function setPartner(\AppBundle\Entity\Partner $partner = null)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return \AppBundle\Entity\Partner
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * Set docType
     *
     * @param \AppBundle\Entity\DocType $docType
     *
     * @return Document
     */
    public function setDocType(\AppBundle\Entity\DocType $docType = null)
    {
        $this->docType = $docType;

        return $this;
    }

    /**
     * Get docType
     *
     * @return \AppBundle\Entity\DocType
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * Set paymentType
     *
     * @param \AppBundle\Entity\PaymentType $paymentType
     *
     * @return Document
     */
    public function setPaymentType(\AppBundle\Entity\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return \AppBundle\Entity\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Add documentLine
     *
     * @param \AppBundle\Entity\DocumentLine $documentLine
     *
     * @return Document
     */
    public function addDocumentLine(\AppBundle\Entity\DocumentLine $documentLine)
    {
        $this->documentLines[] = $documentLine;

        return $this;
    }

    /**
     * Remove documentLine
     *
     * @param \AppBundle\Entity\DocumentLine $documentLine
     */
    public function removeDocumentLine(\AppBundle\Entity\DocumentLine $documentLine)
    {
        $this->documentLines->removeElement($documentLine);
    }

    /**
     * Get documentLines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocumentLines()
    {
        return $this->documentLines;
    }

    /**
     * Set docStatus
     *
     * @param \AppBundle\Entity\DocStatus $docStatus
     *
     * @return Document
     */
    public function setDocStatus(\AppBundle\Entity\DocStatus $docStatus = null)
    {
        $this->docStatus = $docStatus;

        return $this;
    }

    /**
     * Get docStatus
     *
     * @return \AppBundle\Entity\DocStatus
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }
}
