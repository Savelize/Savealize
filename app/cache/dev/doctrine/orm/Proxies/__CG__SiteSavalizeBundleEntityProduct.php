<?php

namespace Proxies\__CG__\Site\SavalizeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Product extends \Site\SavalizeBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setConfirmed($confirmed)
    {
        $this->__load();
        return parent::setConfirmed($confirmed);
    }

    public function getConfirmed()
    {
        $this->__load();
        return parent::getConfirmed();
    }

    public function setIsDeleted($isDeleted)
    {
        $this->__load();
        return parent::setIsDeleted($isDeleted);
    }

    public function getIsDeleted()
    {
        $this->__load();
        return parent::getIsDeleted();
    }

    public function addBrand(\Site\SavalizeBundle\Entity\Brand $brand)
    {
        $this->__load();
        return parent::addBrand($brand);
    }

    public function removeBrand(\Site\SavalizeBundle\Entity\Brand $brand)
    {
        $this->__load();
        return parent::removeBrand($brand);
    }

    public function getBrand()
    {
        $this->__load();
        return parent::getBrand();
    }

    public function setCategory(\Site\SavalizeBundle\Entity\Category $category = NULL)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function addHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->__load();
        return parent::addHistory($history);
    }

    public function removeHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->__load();
        return parent::removeHistory($history);
    }

    public function getHistory()
    {
        $this->__load();
        return parent::getHistory();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'confirmed', 'isDeleted', 'brand', 'category', 'history');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}