<?php
namespace MobileSplash\SplashRequestBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;

  
class AddVendorFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToCity;
 
    public function __construct($propertyPathToCity)
    {
        $this->propertyPathToCity = $propertyPathToCity;
    }
 
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA  => 'preSetData',
            FormEvents::PRE_SUBMIT    => 'preSubmit'
        );
    }
 
    private function addVendorForm($form, $country_id)
    {
        $formOptions = array(
            'class'         => 'MobileSplashSplashRequestBundle:Vendors',
            'label'         => 'vendor',
            'property' => 'name',
            'attr'          => array(
                'placeholder' => 'choose your vendor',
                'class'=>'form-control'
            ),
            'query_builder' => function (EntityRepository $repository) use ($country_id) {
                $qb = $repository->createQueryBuilder('vendors')
                    ->innerJoin('vendors.country', 'country')
                    ->where('country.id = :country_id')
                    ->setParameter('country_id', $country_id);
 
                return $qb;
            }
        );
 
        $form->add($this->propertyPathToCity, 'entity', $formOptions);
    }
 
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $accessor    = PropertyAccess::createPropertyAccessor();
 
        $vendor        = $accessor->getValue($data, $this->propertyPathToCity);
        $country_id = ($vendor) ? $vendor->getCountry()->getId() : null;
 
        $this->addVendorForm($form, $country_id);
    }
 
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        $country_id = array_key_exists('country', $data) ? $data['country'] : null;
 
        $this->addVendorForm($form, $country_id);
    }
}