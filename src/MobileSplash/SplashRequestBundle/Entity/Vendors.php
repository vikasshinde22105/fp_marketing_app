<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendors
 */
class Vendors
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $cityId;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Countries
     */
    private $country;


    /**
     * Set code
     *
     * @param string $code
     * @return Vendors
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Vendors
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
     * Set cityId
     *
     * @param integer $cityId
     * @return Vendors
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return Vendors
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
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
     * Set country
     *
     * @param \MobileSplash\SplashRequestBundle\Entity\Countries $country
     * @return Vendors
     */
    public function setCountry(\MobileSplash\SplashRequestBundle\Entity\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \MobileSplash\SplashRequestBundle\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
