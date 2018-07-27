<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 *  Controller that handle Category Blog
 */

class RegistrationController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function registrationAction()
    {
        return $this->render('@MyTechnosBlog/Front/Registration\registration.html.twig');
    }
}
