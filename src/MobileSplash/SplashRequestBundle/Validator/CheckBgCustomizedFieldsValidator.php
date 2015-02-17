<?php
namespace MobileSplash\SplashRequestBundle\Validator;

use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;

class CheckBgCustomizedFieldsValidator extends ConstraintValidator
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function validate($object, Constraint $constraint)
    {
        if( $object->getCustomizedBackground() == 1 ) {
            if( $object->getIsoPortrait() == null ) {
                $this->context->addViolationAt('isoPortrait', 'Iso Portrait is required.');
            } else if( false == filter_var($object->getIsoPortrait(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('isoPortrait', 'Iso Portrait is not a valid URL.');
            }
            if( $object->getIsoLandscape() == null ) {
                $this->context->addViolationAt('isoLandscape', 'Iso Landscape is required.');
            } else if( false == filter_var($object->getIsoLandscape(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('isoLandscape', 'Iso Landscape is not a valid URL.');
            }
            if( $object->getAndroidPortrait() == null) {
                $this->context->addViolationAt('androidPortrait', 'Android Portrait is required.');
            } else if( false == filter_var($object->getAndroidPortrait(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('androidPortrait', 'Android Portrait is not a valid URL.');
            }
            if( $object->getAndroidLandscape() === null ) {
                $this->context->addViolationAt('androidLandscape', 'Android Landscape is required.');
            } else if( false == filter_var($object->getAndroidLandscape(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('androidLandscape', 'Android Landscape is not a valid URL.');
            }
            if( $object->getWp8Portrait() == NULL ) {
                $this->context->addViolationAt('wp8Portrait', 'Wp8 Portrait is required.');
            } else if( false == filter_var($object->getWp8Portrait(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('wp8Portrait', 'Wp8 Portrait is not a valid URL.');
            }
            if( $object->getWp8Landscape() === null ) {
                $this->context->addViolationAt('wp8Landscape', 'Wp8 Landscape is required.');
            } else if( false == filter_var($object->getWp8Landscape(), FILTER_VALIDATE_URL)){
                $this->context->addViolationAt('wp8Landscape', 'Wp8 Landscape is not a valid URL.');
            }            
        }
    }
}