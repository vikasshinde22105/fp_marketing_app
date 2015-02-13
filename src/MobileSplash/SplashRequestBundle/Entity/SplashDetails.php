<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SplashDetails
 */
class SplashDetails
{
    /**
     * @var string
     */
    private $logoUrl;

    /**
     * @var string
     */
    private $vendorDomain;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $subline;

    /**
     * @var string
     */
    private $requesterName;

    /**
     * @var string
     */
    private $requesterEmail;

    /**
     * @var string
     */
    private $customizedBackground;

    /**
     * @var string
     */
    private $isoPortrait;

    /**
     * @var string
     */
    private $isoLandscape;

    /**
     * @var string
     */
    private $androidPortrait;

    /**
     * @var string
     */
    private $androidLandscape;

    /**
     * @var string
     */
    private $wp8Portrait;

    /**
     * @var string
     */
    private $wp8Landscape;

    /**
     * @var string
     */
    private $idLink;

    /**
     * @var string
     */
    private $adjustlinkUrl;

    /**
     * @var string
     */
    private $deeplinkUrl;

    /**
     * @var string
     */
    private $isoCode;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var \DateTime
     */
    private $closedOn;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Vendors
     */
    private $vendor;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Cities
     */
    private $city;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Brands
     */
    private $brand;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Countries
     */
    private $country;


    /**
     * Set logoUrl
     *
     * @param string $logoUrl
     * @return SplashDetails
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Get logoUrl
     *
     * @return string 
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set vendorDomain
     *
     * @param string $vendorDomain
     * @return SplashDetails
     */
    public function setVendorDomain($vendorDomain)
    {
        $this->vendorDomain = $vendorDomain;

        return $this;
    }

    /**
     * Get vendorDomain
     *
     * @return string 
     */
    public function getVendorDomain()
    {
        return $this->vendorDomain;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return SplashDetails
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set subline
     *
     * @param string $subline
     * @return SplashDetails
     */
    public function setSubline($subline)
    {
        $this->subline = $subline;

        return $this;
    }

    /**
     * Get subline
     *
     * @return string 
     */
    public function getSubline()
    {
        return $this->subline;
    }

    /**
     * Set requesterName
     *
     * @param string $requesterName
     * @return SplashDetails
     */
    public function setRequesterName($requesterName)
    {
        $this->requesterName = $requesterName;

        return $this;
    }

    /**
     * Get requesterName
     *
     * @return string 
     */
    public function getRequesterName()
    {
        return $this->requesterName;
    }

    /**
     * Set requesterEmail
     *
     * @param string $requesterEmail
     * @return SplashDetails
     */
    public function setRequesterEmail($requesterEmail)
    {
        $this->requesterEmail = $requesterEmail;

        return $this;
    }

    /**
     * Get requesterEmail
     *
     * @return string 
     */
    public function getRequesterEmail()
    {
        return $this->requesterEmail;
    }

    /**
     * Set customizedBackground
     *
     * @param string $customizedBackground
     * @return SplashDetails
     */
    public function setCustomizedBackground($customizedBackground)
    {
        $this->customizedBackground = $customizedBackground;

        return $this;
    }

    /**
     * Get customizedBackground
     *
     * @return string 
     */
    public function getCustomizedBackground()
    {
        return $this->customizedBackground;
    }

    /**
     * Set isoPortrait
     *
     * @param string $isoPortrait
     * @return SplashDetails
     */
    public function setIsoPortrait($isoPortrait)
    {
        $this->isoPortrait = $isoPortrait;

        return $this;
    }

    /**
     * Get isoPortrait
     *
     * @return string 
     */
    public function getIsoPortrait()
    {
        return $this->isoPortrait;
    }

    /**
     * Set isoLandscape
     *
     * @param string $isoLandscape
     * @return SplashDetails
     */
    public function setIsoLandscape($isoLandscape)
    {
        $this->isoLandscape = $isoLandscape;

        return $this;
    }

    /**
     * Get isoLandscape
     *
     * @return string 
     */
    public function getIsoLandscape()
    {
        return $this->isoLandscape;
    }

    /**
     * Set androidPortrait
     *
     * @param string $androidPortrait
     * @return SplashDetails
     */
    public function setAndroidPortrait($androidPortrait)
    {
        $this->androidPortrait = $androidPortrait;

        return $this;
    }

    /**
     * Get androidPortrait
     *
     * @return string 
     */
    public function getAndroidPortrait()
    {
        return $this->androidPortrait;
    }

    /**
     * Set androidLandscape
     *
     * @param string $androidLandscape
     * @return SplashDetails
     */
    public function setAndroidLandscape($androidLandscape)
    {
        $this->androidLandscape = $androidLandscape;

        return $this;
    }

    /**
     * Get androidLandscape
     *
     * @return string 
     */
    public function getAndroidLandscape()
    {
        return $this->androidLandscape;
    }

    /**
     * Set wp8Portrait
     *
     * @param string $wp8Portrait
     * @return SplashDetails
     */
    public function setWp8Portrait($wp8Portrait)
    {
        $this->wp8Portrait = $wp8Portrait;

        return $this;
    }

    /**
     * Get wp8Portrait
     *
     * @return string 
     */
    public function getWp8Portrait()
    {
        return $this->wp8Portrait;
    }

    /**
     * Set wp8Landscape
     *
     * @param string $wp8Landscape
     * @return SplashDetails
     */
    public function setWp8Landscape($wp8Landscape)
    {
        $this->wp8Landscape = $wp8Landscape;

        return $this;
    }

    /**
     * Get wp8Landscape
     *
     * @return string 
     */
    public function getWp8Landscape()
    {
        return $this->wp8Landscape;
    }

    /**
     * Set idLink
     *
     * @param string $idLink
     * @return SplashDetails
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;

        return $this;
    }

    /**
     * Get idLink
     *
     * @return string 
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set adjustlinkUrl
     *
     * @param string $adjustlinkUrl
     * @return SplashDetails
     */
    public function setAdjustlinkUrl($adjustlinkUrl)
    {
        $this->adjustlinkUrl = $adjustlinkUrl;

        return $this;
    }

    /**
     * Get adjustlinkUrl
     *
     * @return string 
     */
    public function getAdjustlinkUrl()
    {
        return $this->adjustlinkUrl;
    }

    /**
     * Set deeplinkUrl
     *
     * @param string $deeplinkUrl
     * @return SplashDetails
     */
    public function setDeeplinkUrl($deeplinkUrl)
    {
        $this->deeplinkUrl = $deeplinkUrl;

        return $this;
    }

    /**
     * Get deeplinkUrl
     *
     * @return string 
     */
    public function getDeeplinkUrl()
    {
        return $this->deeplinkUrl;
    }

    /**
     * Set isoCode
     *
     * @param string $isoCode
     * @return SplashDetails
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string 
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return SplashDetails
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set closedOn
     *
     * @param \DateTime $closedOn
     * @return SplashDetails
     */
    public function setClosedOn($closedOn)
    {
        $this->closedOn = $closedOn;

        return $this;
    }

    /**
     * Get closedOn
     *
     * @return \DateTime 
     */
    public function getClosedOn()
    {
        return $this->closedOn;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return SplashDetails
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set vendor
     *
     * @param \MobileSplash\SplashRequestBundle\Entity\Vendors $vendor
     * @return SplashDetails
     */
    public function setVendor(\MobileSplash\SplashRequestBundle\Entity\Vendors $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \MobileSplash\SplashRequestBundle\Entity\Vendors 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set city
     *
     * @param \MobileSplash\SplashRequestBundle\Entity\Cities $city
     * @return SplashDetails
     */
    public function setCity(\MobileSplash\SplashRequestBundle\Entity\Cities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \MobileSplash\SplashRequestBundle\Entity\Cities 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set brand
     *
     * @param \MobileSplash\SplashRequestBundle\Entity\Brands $brand
     * @return SplashDetails
     */
    public function setBrand(\MobileSplash\SplashRequestBundle\Entity\Brands $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \MobileSplash\SplashRequestBundle\Entity\Brands 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set country
     *
     * @param \MobileSplash\SplashRequestBundle\Entity\Countries $country
     * @return SplashDetails
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
