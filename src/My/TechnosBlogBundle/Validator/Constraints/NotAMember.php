<?php

namespace My\TechnosBlogBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */

class NotAMember extends Constraint
{
    /**
     * @var string
     */
    public $message = "Votre adresse email n'existe pas. Veuillez taper un email valide.";

    /**
     * @return string
     */
    public function validatedBy()
    {
        return "my_technos_blog_notamember";
    }

}