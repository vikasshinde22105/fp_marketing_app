<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 */
class Cities
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Countries
     */
    private $country;


    /**
     * Set name
     *
     * @param string $name
     * @return Cities
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
     * @return Cities
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
