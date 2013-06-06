<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity
 */
class Brand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmed", type="blob", nullable=false)
     */
    private $confirmed;

    /**
     * @var string
     *
     * @ORM\Column(name="is_deleted", type="blob", nullable=false)
     */
    private $isDeleted;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="brand")
     */
    private $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Brand
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

    /**
     * Set confirmed
     *
     * @param string $confirmed
     * @return Brand
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
    
        return $this;
    }

    /**
     * Get confirmed
     *
     * @return string 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set isDeleted
     *
     * @param string $isDeleted
     * @return Brand
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    
        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return string 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Add product
     *
     * @param \Site\SavalizeBundle\Entity\Product $product
     * @return Brand
     */
    public function addProduct(\Site\SavalizeBundle\Entity\Product $product)
    {
        $this->product[] = $product;
    
        return $this;
    }

    /**
     * Remove product
     *
     * @param \Site\SavalizeBundle\Entity\Product $product
     */
    public function removeProduct(\Site\SavalizeBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }
}