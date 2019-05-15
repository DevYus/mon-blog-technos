<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SearchController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(Request $request)
    {
        $entMa = $this->getDoctrine()->getManager();

        $query = $request->query->get('query');

        $searchArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getResultsSearch($query);
        $count = count($searchArticles);
        $lastArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getLastArticles();

        return $this->render('@MyTechnosBlog/Front/Search\search.html.twig', [
            'lastArticles' => $lastArticles,
            'searchArticles' => $searchArticles,
            'count' => $count,
        ]);
    }
}
