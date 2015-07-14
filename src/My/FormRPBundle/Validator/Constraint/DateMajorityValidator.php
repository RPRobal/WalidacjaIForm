<?php
/**
 * Created by PhpStorm.
 * User: Robal
 */
namespace My\FormRPBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DateMajorityValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if(((date_format(new \DateTime(),'U')-date_format($value,'U'))/3600/24)<6574.35958)
        {
            $this->context->addViolation($constraint->message,array('%string%'=>date_format($value,'Y-m-d')));
        }
    }
}