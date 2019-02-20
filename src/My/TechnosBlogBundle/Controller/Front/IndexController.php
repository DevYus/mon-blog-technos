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
            ['date' => 'desc']
        );

        $rightArticles = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            [],
            ['date' => 'desc'],
            5,
            1
        );

        $popularArticles = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            [],
            ['date' => 'desc'],
            3,
            0
        );

        $videos = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            ['category' => 'Video'],
            ['date' => 'desc'],
            2,
            0
        );

        $tutorials = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            ['category' => 'Tutoriel'],
            ['date' => 'desc'],
            3,
            0
        );

        $surveys = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            ['category' => 'Sondage'],
            ['date' => 'desc'],
            3,
            0
        );

        $articlesCarrousel = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            [],
            ['id' => 'desc'],
            10,
            0
        );

        return $this->render('@MyTechnosBlog/Front/Index\index.html.twig', [
            'lastArticle' => $lastArticle,
            'rightArticles' => $rightArticles,
            'popularArticles' => $popularArticles,
            'videos' => $videos,
            'tutorials' => $tutorials,
            'surveys' => $surveys,
            'articlesCarrousel' => $articlesCarrousel,
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
