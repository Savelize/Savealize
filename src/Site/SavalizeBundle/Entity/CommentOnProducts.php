<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentOnProducts
 *
 * @ORM\Table(name="comment_on_products")
 * @ORM\Entity
 */
class CommentOnProducts
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
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

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
     * @var \ProductBrand
     *
     * @ORM\ManyToOne(targetEntity="ProductBrand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_brand_id", referencedColumnName="id")
     * })
     */
    private $productBrand;



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
     * Set comment
     *
     * @param string $comment
     * @return CommentOnProducts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param \Site\SavalizeBundle\Entity\UserAccount $user
     * @return CommentOnProducts
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
     * Set productBrand
     *
     * @param \Site\SavalizeBundle\Entity\ProductBrand $productBrand
     * @return CommentOnProducts
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
}