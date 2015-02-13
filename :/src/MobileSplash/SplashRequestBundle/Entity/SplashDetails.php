<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SplashDetails
 *
 * @ORM\Table(name="splash_details", indexes={@ORM\Index(name="fk_tbl_splash_details_1_idx", columns={"country_id"}), @ORM\Index(name="fk_tbl_splash_details_2_idx", columns={"brand_id"}), @ORM\Index(name="fk_tbl_splash_details_3_idx", columns={"city_id"}), @ORM\Index(name="fk_tbl_splash_details_4_idx", columns={"vendor_id"})})
 * @ORM\Entity
 */
class SplashDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="logo_url", type="string", length=45, nullable=true)
     */
    private $logoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_domain", type="string", length=45, nullable=true)
     */
    private $vendorDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=45, nullable=true)
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="subline", type="string", length=45, nullable=true)
     */
    private $subline;

    /**
     * @var string
     *
     * @ORM\Column(name="requester_name", type="string", length=45, nullable=true)
     */
    private $requesterName;

    /**
     * @var string
     *
     * @ORM\Column(name="requester_email", type="string", length=45, nullable=true)
     */
    private $requesterEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customized_background", type="string", length=45, nullable=true)
     */
    private $customizedBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_portrait", type="string", length=45, nullable=true)
     */
    private $isoPortrait;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_landscape", type="string", length=45, nullable=true)
     */
    private $isoLandscape;

    /**
     * @var string
     *
     * @ORM\Column(name="android_portrait", type="string", length=45, nullable=true)
     */
    private $androidPortrait;

    /**
     * @var string
     *
     * @ORM\Column(name="android_landscape", type="string", length=45, nullable=true)
     */
    private $androidLandscape;

    /**
     * @var string
     *
     * @ORM\Column(name="wp8_portrait", type="string", length=45, nullable=true)
     */
    private $wp8Portrait;

    /**
     * @var string
     *
     * @ORM\Column(name="wp8_landscape", type="string", length=45, nullable=true)
     */
    private $wp8Landscape;

    /**
     * @var string
     *
     * @ORM\Column(name="id_link", type="string", length=45, nullable=true)
     */
    private $idLink;

    /**
     * @var string
     *
     * @ORM\Column(name="adjustlink_url", type="string", length=45, nullable=true)
     */
    private $adjustlinkUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="deeplink_url", type="string", length=45, nullable=true)
     */
    private $deeplinkUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=45, nullable=true)
     */
    private $isoCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed_on", type="datetime", nullable=true)
     */
    private $closedOn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Vendors
     *
     * @ORM\ManyToOne(targetEntity="MobileSplash\SplashRequestBundle\Entity\Vendors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     * })
     */
    private $vendor;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="MobileSplash\SplashRequestBundle\Entity\Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Brands
     *
     * @ORM\ManyToOne(targetEntity="MobileSplash\SplashRequestBundle\Entity\Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;

    /**
     * @var \MobileSplash\SplashRequestBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="MobileSplash\SplashRequestBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;


}
