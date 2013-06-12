<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="Site\SavalizeBundle\Entity\CompanyRepository")
 */
class Company {

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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=11)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=30)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=30)
     */
    private $region;

    /**
<<<<<<< HEAD
     * @var \History
     *
     * @ORM\OneToMany(targetEntity="History" , mappedBy="history")
     */
    private $history;
=======
    *@ORM\OneToMany(targetEntity="\Site\SavalizeBundle\Entity\Brand", mappedBy="Company")
    **/
    private $brands;
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Company
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Company
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Company
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Company
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Company
     */
<<<<<<< HEAD
    public function setTelphone($telphone) {
        $this->telphone = $telphone;

=======
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
<<<<<<< HEAD
    public function getTelphone() {
        return $this->telphone;
=======
    public function getTelephone()
    {
        return $this->telephone;
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Company
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Company
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Company
     */
    public function setRegion($region) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion() {
        return $this->region;
    }
<<<<<<< HEAD

=======
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
    /**
     * Constructor
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->history = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add history
     *
     * @param \Site\SavalizeBundle\Entity\History $history
     * @return Company
     */
    public function addHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->history[] = $history;
=======
        $this->brands = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add brands
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brands
     * @return Company
     */
    public function addBrand(\Site\SavalizeBundle\Entity\Brand $brands)
    {
        $this->brands[] = $brands;
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
    
        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
     * Remove brands
     *
     * @param \Site\SavalizeBundle\Entity\Brand $brands
     */
    public function removeBrand(\Site\SavalizeBundle\Entity\Brand $brands)
    {
        $this->brands->removeElement($brands);
    }

    /**
     * Get brands
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBrands()
    {
        return $this->brands;
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
    }
}