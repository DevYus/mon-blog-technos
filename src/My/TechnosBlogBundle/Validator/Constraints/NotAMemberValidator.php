<?php

namespace My\TechnosBlogBundle\Validator\Constraints;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


class NotAMemberValidator extends ConstraintValidator
{
    private $requestStack;
    private $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function validate($value, Constraint $constraint)
    {

        $isMember = $this->em->getRepository('MyTechnosBlogBundle:Users')->findOneByEmail($value);

        if(!$isMember)
        {
            $this->context->addViolation($constraint->message);

        }
    }
}