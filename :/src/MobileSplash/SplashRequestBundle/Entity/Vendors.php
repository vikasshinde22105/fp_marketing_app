<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendors
 *
 * @ORM\Table(name="vendors", indexes={@ORM\Index(name="fk_tbl_vendor_1_idx", columns={"city_id"}), @ORM\Index(name="fk_tbl_vendor_1_idx1", columns={"country_id"})})
 * @ORM\Entity
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


}
