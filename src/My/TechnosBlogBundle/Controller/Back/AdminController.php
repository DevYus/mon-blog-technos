<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function adminAction()
    {
        return $this->render('@MyTechnosBlog/Back/Admin\admin.html.twig');
    }

}
