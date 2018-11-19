<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Articles;
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

        $lastArticle = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findOneBy(
            [],
            ['id' => 'desc']
        );

        $rightArticles = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            [],
            ['id' => 'desc'],
            4,
            0
        );

        return $this->render('@MyTechnosBlog/Front/Index\index.html.twig', [
            'lastArticle' => $lastArticle,
            'rightArticles' => $rightArticles,

        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxRequestAction(Request $request)
    {
        // Ajax Request

        $title = $request->query->get('title');

        $entMa = $this->getDoctrine()->getManager();
        $rows = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getResultsForJsonReponse($title);

        return new JsonResponse($rows);
    }
}
