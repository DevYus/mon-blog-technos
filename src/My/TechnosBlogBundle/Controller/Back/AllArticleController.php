<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Entity\Articles;



/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AllArticleController extends Controller
{

    /**
     * @param $page
     * @return Response
     */
    public function allArticleAction($page)
    {
        /******* Pagination and display all articles ******/

            $nbArticlesByPage = 8;

            $em = $this->getDoctrine()->getManager();

            $articles = $em->getRepository('MyTechnosBlogBundle:Articles')->paginate($page, $nbArticlesByPage);

            $pagination = [
                'page' => $page,
                'nbPages' => ceil(count($articles) / $nbArticlesByPage),
                'routeName' => 'admin_all_article',
                'paramsRoute' => []
            ];


        return $this->render('@MyTechnosBlog/Back/AllArticle\allArticle.html.twig', [
                'articles' => $articles,
                'pagination' =>$pagination,
        ]);

    }

}
