<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\UsersType;



/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AddAdministratorController extends Controller
{
    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addAdministratorAction(Request $request, UserPasswordEncoderInterface $encoder)
    {


    }


}
