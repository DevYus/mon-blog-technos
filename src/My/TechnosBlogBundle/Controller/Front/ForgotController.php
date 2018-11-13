<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\ForgotPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;


/**
 * Class ForgotController
 * @package My\TechnosBlogBundle\Controller\Front
 */

class ForgotController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function forgotAction(Request $request)
    {

    }


    /**
     * @param $user
     * @return bool
     */
    private function checkLogin($user)
    {

    }

}
