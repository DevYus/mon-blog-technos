<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 *  Controller that handle Security Blog
 */

class SecurityController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function loginAction()
    {
        return $this->render('@MyTechnosBlog/Front/Security\login.html.twig');
    }
}
