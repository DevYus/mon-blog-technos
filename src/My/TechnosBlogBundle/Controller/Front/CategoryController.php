<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CategoryController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class CategoryController extends Controller
{
    /**
     * @param \Article $category
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categoryAction($category)
    {
        $entMa = $this->getDoctrine()->getManager();
        $articlesCategory = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Articles')->findBy(
            ['category' => $category],
            ['date' => 'desc']
        );

        if(!$articlesCategory) {
            throw $this->createNotFoundException('The article does not exist');
        }

        $lastArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getLastArticles();

        return $this->render('@MyTechnosBlog/Front/Category\category.html.twig', [
            'category' => $category,
            'articlesCategory' => $articlesCategory,
            'lastArticles' => $lastArticles,
        ]);
    }
}
