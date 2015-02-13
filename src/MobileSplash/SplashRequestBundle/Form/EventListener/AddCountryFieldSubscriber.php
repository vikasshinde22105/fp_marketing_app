<?php
namespace Splash\SplashBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class AddCountryFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToCity;

    public function __construct($propertyPathToCity)
    {
        $this->propertyPathToCity = $propertyPathToCity;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        );
    }

    private function addCountryForm($form, $country = null)
    {
        $formOptions = array(
            'class'         => 'SplashSplashBundle:Countries',
            'property' => 'name',
            'mapped'        => false,
            'label'         => 'Country',
            'attr'          => array(
                'class' => 'form-control',
            ),
        );

        if ($country) {
            $formOptions['data'] = $country;
        }

        $form->add('country', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::getPropertyAccessor();

        $city    = $accessor->getValue($data, $this->propertyPathToCity);
        $country = ($city) ? $city->getCountry() : null;

        $this->addCountryForm($form, $country);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $this->addCountryForm($form);
    }
}