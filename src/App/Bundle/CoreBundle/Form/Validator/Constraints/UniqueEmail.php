<?php

namespace App\Bundle\CoreBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueEmail extends Constraint
{
    public $message = 'Email already exist.';

    public $options = array();

    public function __construct($options = array())
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }
    
    public function validatedBy()
    {
        return 'unique_email';
    }
}
