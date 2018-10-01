<?php

namespace My\TechnosBlogBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */

class NotAMember extends Constraint
{
    public $message = "Votre adresse email n'existe pas. Veuillez taper un email valide.";

    public function validatedBy()
    {
        return "my_technos_blog_notamember";
    }

}