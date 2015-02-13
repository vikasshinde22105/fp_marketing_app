<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 */
class Countries
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Countries
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
     * Set timezone
     *
     * @param string $timezone
     * @return Countries
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
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
}
