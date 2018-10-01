<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 *  Controller that handle Home Blog
 */

class IndexController extends Controller
{

    /**
     * @return Response
     */


    public function indexAction()
    {
        return $this->render('@MyTechnosBlog/Front/Index\index.html.twig');
    }

}
