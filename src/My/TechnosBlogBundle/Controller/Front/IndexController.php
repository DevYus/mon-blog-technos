<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 *  Controller that handle Home Blog
 */

class IndexController extends Controller
{

  /**
   * Methode action principal du blog
   * @ return index.html template
   */

    public function indexAction()
    {
        return $this->render('@MyTechnosBlog/Front/Index\index.html.twig');
    }
}
