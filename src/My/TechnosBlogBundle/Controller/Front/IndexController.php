<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Front
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
