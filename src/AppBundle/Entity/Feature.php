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
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set value
     *
     * @param string $value
     *
     * @return Feature
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set datUpd
     *
     * @param \DateTime $datUpd
     *
     * @return Feature
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
     * @return Feature
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
     * Add product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Feature
     */
    public function addProduct(\AppBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AppBundle\Entity\Product $product
     */
    public function removeProduct(\AppBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set name
     *
     * @param \AppBundle\Entity\FeatureName $name
     *
     * @return Feature
     */
    public function setName(\AppBundle\Entity\FeatureName $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return \AppBundle\Entity\FeatureName
     */
    public function getName()
    {
        return $this->name;
    }
}
