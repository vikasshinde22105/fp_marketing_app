<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendors
 *
 * @ORM\Entity(repositoryClass="MobileSplash\SplashRequestBundle\Entity\VendorsRepository")
 * @ORM\Table(name="vendors", indexes={@ORM\Index(name="fk_tbl_vendor_1_idx", columns={"city_id"}), @ORM\Index(name="fk_tbl_vendor_1_idx1", columns={"country_id"})})
 * @ORM\HasLifecycleCallbacks()
 */
class Vendors
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=true)
     */
    private $cityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="MobileSplash\SplashRequestBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
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
           public function __toString()
    {
    return (string) $this->getName();
    }
}
