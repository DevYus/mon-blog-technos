<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 *  Controller that handle Category Blog
 */

class ArticleController extends Controller
{
    /**
     * @param $category
     * @param $slug
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function articleAction($category, $slug, $id)
    {
        return $this->render('@MyTechnosBlog/Front/Article\article.html.twig', array(
            'category' => $category,
            'slug' => $slug,
            'id' => $id
        ));
    }
}
