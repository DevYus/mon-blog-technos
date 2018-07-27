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

class CategoryController extends Controller
{
    /**
     * @param $category
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function categoryAction($category)
    {
        return $this->render('@MyTechnosBlog/Front/Category\category.html.twig', array(
            'category' => $category
        ));
    }
}
