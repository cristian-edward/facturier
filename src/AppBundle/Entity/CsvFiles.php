<?php

namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsvFiles
 *
 * @ORM\Table(name="csv_files")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class CsvFiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;      

    
    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * 
     * 
     */
    private $name;    
    
    /**
     * @ORM\Column(name="tip", type="string", length=255)
     * 
     * 
     */
    private $tip;      
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_used", type="boolean", nullable=true)
     */
    private $isUsed;    

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    private $datCre; 
    
     /**
     * 
     */
    private $file;
    
}
