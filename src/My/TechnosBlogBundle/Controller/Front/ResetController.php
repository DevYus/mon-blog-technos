<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Form\ResetPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Class ResetController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class ResetController extends Controller
{

     public function resetAction(Request $request, UserPasswordEncoderInterface $encoder)
     {



     }




}
