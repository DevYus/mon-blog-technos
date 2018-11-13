<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 *  Controller that handle Category Blog
 */

class ContactController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function contactAction()
    {
        return $this->render('@MyTechnosBlog/Front/Contact\contact.html.twig');
    }
}
