<?php

namespace MobileSplash\SplashRequestBundle\Entity;

use Doctrine\ORM\EntityRepository;

class VendorsRepository extends EntityRepository
{
    public function findVendorsByCountry($country_id)
    {
         $query = $this->createQueryBuilder('v')
            ->select('v.id,v.name')       
            ->where('v.country = :country_id')
            ->setParameter('country_id', $country_id)
            ->orderBy('v.id', 'ASC')
            ->getQuery();
           
            return $query->getResult();
    }
}