<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductBrand
 *
 * @ORM\Table(name="product_brand")
 * @ORM\Entity(repositoryClass="Site\SavalizeBundle\Entity\ProductBrandRepository")
 */
class ProductBrand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=100)
     */
    private $picture;

    /**
     *@ORM\ManyToOne(targetEntity="\Site\SavalizeBundle\Entity\Brand", inversedBy="productBrands")
     *@ORM\JoinColumn(name="brand_id", referencedColumnName="id", onDelete = "CASCADE")
     */
    private $brand;
    
    /**
     *@ORM\ManyToOne(targetEntity="\Site\SavalizeBundle\Entity\Product", inversedBy="productBrands")
     *@ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete = "CASCADE")
     */
    private $product;
    
    /**
    *@ORM\OneToMany(targetEntity="\Site\SavalizeBundle\Entity\History", mappedBy="productBrand")
    **/
    private $histories;
    
    /**
    *@ORM\OneToMany(targetEntity="\Site\SavalizeBundle\Entity\ProductRating", mappedBy="productBrand")
    **/
    private $productRatings;
    
    /**
    *@ORM\OneToMany(targetEntity="\Site\SavalizeBundle\Entity\ProductComment", mappedBy="productBrand")
    **/
    private $productComments;

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
     * Set picture
     *
     * @param string $picture
     * @return ProductBrand
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
