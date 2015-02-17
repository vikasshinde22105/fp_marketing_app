<?php
namespace MobileSplash\SplashRequestBundle\Validator;

use Symfony\Component\Validator\Constraint;

/** @Annotation */
class CheckBgCustomizedFields extends Constraint
{
    public function validatedBy()
    {
        return 'check_customized_bg_fields';
    }

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
