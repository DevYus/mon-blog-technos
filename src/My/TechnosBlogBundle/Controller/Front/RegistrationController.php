<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\UsersType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Class RegistrationController
 * @package My\TechnosBlogBundle\Controller\Front
 */

class RegistrationController extends Controller
{

    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function registrationAction(Request $request, UserPasswordEncoderInterface $encoder)
    {

    }
}
