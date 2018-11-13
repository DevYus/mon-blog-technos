<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


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


    public function ajaxRequestAction(Request $request)
    {
        // Ajax Request

        $title = $request->query->get('title');

        $entMa = $this->getDoctrine()->getManager();
        $rows = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getResultsForJsonReponse($title);

        return new JsonResponse($rows);

    }

}
