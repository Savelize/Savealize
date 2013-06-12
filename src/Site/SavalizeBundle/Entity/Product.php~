<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
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
     * @ORM\ManyToMany(targetEntity="Brand", inversedBy="product")
     * @ORM\JoinTable(name="product_brand",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   }
     * )
     */
    private $brand;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

     /**
     @var \History
     *
     * @ORM\OneToMany(targetEntity="History" , mappedBy="history")
     */
    private $history;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set confirmed
     *
     * @param string $confirmed
     * @return Product
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
     * @return Product
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
     * Add brand
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brand
     * @return Product
     */
    public function addBrand(\Site\SavalizeBundle\Entity\Brand $brand)
    {
        $this->brand[] = $brand;
    
        return $this;
    }

    /**
     * Remove brand
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brand
     */
    public function removeBrand(\Site\SavalizeBundle\Entity\Brand $brand)
    {
        $this->brand->removeElement($brand);
    }

    /**
     * Get brand
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set category
     *
     * @param \Site\SavalizeBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Site\SavalizeBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Site\SavalizeBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add history
     *
     * @param \Site\SavalizeBundle\Entity\History $history
     * @return Product
     */
    public function addHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->history[] = $history;
    
        return $this;
    }

    /**
     * Remove history
     *
     * @param \Site\SavalizeBundle\Entity\History $history
     */
    public function removeHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->history->removeElement($history);
    }

    /**
     * Get history
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistory()
    {
        return $this->history;
    }
}