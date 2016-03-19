<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @ORM\HasLifecycleCallbacks()
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
     * @var string
     * 
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    
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
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productWarehouse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return Product
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set salePrice
     *
     * @param float $salePrice
     *
     * @return Product
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Product
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set datUpd
     * @ORM\PreUpdate
     * @ORM\PrePersist
     * @param \DateTime $datUpd
     *
     * @return Product
     */
    public function setDatUpd()
    {
        $this->datUpd = new \DateTime();

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
     * @ORM\PrePersist
     * @param \DateTime $datCre
     *
     * @return Product
     */
    public function setDatCre()
    {
        $this->datCre = new \DateTime();

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
     * Set unitMasure
     *
     * @param \AppBundle\Entity\UnitMeasure $unitMasure
     *
     * @return Product
     */
    public function setUnitMasure(\AppBundle\Entity\UnitMeasure $unitMasure = null)
    {
        $this->unitMasure = $unitMasure;

        return $this;
    }

    /**
     * Get unitMasure
     *
     * @return \AppBundle\Entity\UnitMeasure
     */
    public function getUnitMasure()
    {
        return $this->unitMasure;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Product
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add feature
     *
     * @param \AppBundle\Entity\Feature $feature
     *
     * @return Product
     */
    public function addFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \AppBundle\Entity\Feature $feature
     */
    public function removeFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Add productWarehouse
     *
     * @param \AppBundle\Entity\ProductWarehouse $productWarehouse
     *
     * @return Product
     */
    public function addProductWarehouse(\AppBundle\Entity\ProductWarehouse $productWarehouse)
    {
        $this->productWarehouse[] = $productWarehouse;

        return $this;
    }

    /**
     * Remove productWarehouse
     *
     * @param \AppBundle\Entity\ProductWarehouse $productWarehouse
     */
    public function removeProductWarehouse(\AppBundle\Entity\ProductWarehouse $productWarehouse)
    {
        $this->productWarehouse->removeElement($productWarehouse);
    }

    /**
     * Get productWarehouse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductWarehouse()
    {
        return $this->productWarehouse;
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\ProductImage $image
     *
     * @return Product
     */
    public function addImage(\AppBundle\Entity\ProductImage $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\ProductImage $image
     */
    public function removeImage(\AppBundle\Entity\ProductImage $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
    
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function __toString() {
        return $this->reference.' - '.$this->name;
    }
    

}
