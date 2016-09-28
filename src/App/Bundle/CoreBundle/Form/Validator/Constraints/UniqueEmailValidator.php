<?php
namespace App\Bundle\CoreBundle\Form\Validator\Constraints;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueEmailValidator extends ConstraintValidator
{   
    private $yiuserRepository;

    public function __construct(EntityRepository $yiuserRepository)
    {
        $this->yiuserRepository = $yiuserRepository;
    }


    public function validate($value, Constraint $constraint)
    { 
        $value = trim($value);
        $options = $constraint->getOptions();
        $totalUser = 0;

        if($options["excludeUserId"] !== null) { 

            $totalUser = $this->yiuserRepository->findUserByEmailExcludeId(array( 
                'id' => $options["excludeUserId"],
                'email' => $value
            ));

        } else {
            $totalUser = $this->yiuserRepository->countEmail($value);
        }

        if (strlen(trim($value)) > 0 && $totalUser > 0) {
            $this->context
                 ->buildViolation($options['message'])
                 ->setParameter('%string%', $value)
                 ->addViolation();
        }

    }
}
