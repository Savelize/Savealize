<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="Site\SavalizeBundle\Entity\HistoryRepository")
 */
class History
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
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Brand
     *
     * @ORM\ManyToOne(targetEntity="Brand" , inversedBy="brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brands;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category" , inversedBy="category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company" , inversedBy="companies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $companies;

    /**
     * @var \UserAccount
     *
     * @ORM\ManyToOne(targetEntity="UserAccount" , inversedBy="user_account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product" , inversedBy="product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $products;



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
     * Set price
     *
     * @param integer $price
     * @return History
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return History
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set brand
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brand
     * @return History
     */
    public function setBrand(\Site\SavalizeBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return \Site\SavalizeBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set category
     *
     * @param \Site\SavalizeBundle\Entity\Category $category
     * @return History
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
     * Set company
     *
     * @param \Site\SavalizeBundle\Entity\Company $company
     * @return History
     */
    public function setCompany(\Site\SavalizeBundle\Entity\Company $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \Site\SavalizeBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set user
     *
     * @param \Site\SavalizeBundle\Entity\UserAccount $user
     * @return History
     */
    public function setUser(\Site\SavalizeBundle\Entity\UserAccount $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Site\SavalizeBundle\Entity\UserAccount 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set product
     *
     * @param \Site\SavalizeBundle\Entity\Product $product
     * @return History
     */
    public function setProduct(\Site\SavalizeBundle\Entity\Product $product = null)
    {
        $this->products = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Site\SavalizeBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->products;
    }
    

    /**
     * Set brands
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brands
     * @return History
     */
    public function setBrands(\Site\SavalizeBundle\Entity\Brand $brands = null)
    {
        $this->brands = $brands;
    
        return $this;
    }

    /**
     * Get brands
     *
     * @return \Site\SavalizeBundle\Entity\Brand 
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Set companies
     *
     * @param \Site\SavalizeBundle\Entity\Company $companies
     * @return History
     */
    public function setCompanies(\Site\SavalizeBundle\Entity\Company $companies = null)
    {
        $this->companies = $companies;
    
        return $this;
    }

    /**
     * Get companies
     *
     * @return \Site\SavalizeBundle\Entity\Company 
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * Set products
     *
     * @param \Site\SavalizeBundle\Entity\Product $products
     * @return History
     */
    public function setProducts(\Site\SavalizeBundle\Entity\Product $products = null)
    {
        $this->products = $products;
    
        return $this;
    }

    /**
     * Get products
     *
     * @return \Site\SavalizeBundle\Entity\Product 
     */
    public function getProducts()
    {
        return $this->products;
    }
}