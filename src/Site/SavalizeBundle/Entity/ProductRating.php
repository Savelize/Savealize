<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductRating
 *
 * @ORM\Table(name="product_rating")
 * @ORM\Entity
 */
class ProductRating
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
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var boolean
     *
     * @ORM\Column(name="like", type="boolean", nullable=false)
     */
    private $like;

    /**
     * @var \ProductBrand
     *
     * @ORM\ManyToOne(targetEntity="ProductBrand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_brand_id", referencedColumnName="id")
     * })
     */
    private $productBrand;

    /**
     * @var \UserAccount
     *
     * @ORM\ManyToOne(targetEntity="UserAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set rating
     *
     * @param integer $rating
     * @return ProductRating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set like
     *
     * @param boolean $like
     * @return ProductRating
     */
    public function setLike($like)
    {
        $this->like = $like;
    
        return $this;
    }

    /**
     * Get like
     *
     * @return boolean 
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set productBrand
     *
     * @param \Site\SavalizeBundle\Entity\ProductBrand $productBrand
     * @return ProductRating
     */
    public function setProductBrand(\Site\SavalizeBundle\Entity\ProductBrand $productBrand = null)
    {
        $this->productBrand = $productBrand;
    
        return $this;
    }

    /**
     * Get productBrand
     *
     * @return \Site\SavalizeBundle\Entity\ProductBrand 
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * Set user
     *
     * @param \Site\SavalizeBundle\Entity\UserAccount $user
     * @return ProductRating
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
}
