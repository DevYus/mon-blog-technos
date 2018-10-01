<?php

namespace My\TechnosBlogBundle\Validator\Constraints;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


class NotAMemberValidator extends ConstraintValidator
{
    /**
     * @var RequestStack
     * @var $em
     */
    private $requestStack;
    private $em;

    /**
     * NotAMemberValidator constructor.
     * @param RequestStack $requestStack
     * @param EntityManagerInterface $em
     */
    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {

        $isMember = $this->em->getRepository('MyTechnosBlogBundle:Users')->findOneByEmail($value);

        if(!$isMember)
        {
            $this->context->addViolation($constraint->message);

        }
    }
}