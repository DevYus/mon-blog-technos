<?php

namespace My\TechnosBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MyTechnosBlog/Default/index.html.twig');
    }
}
