<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Entity\Articles;
use My\TechnosBlogBundle\Form\AddArticleType;
use My\TechnosBlogBundle\Form\UpdateArticleType;
use My\TechnosBlogBundle\Form\DeleteType;




/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class HandleArticleController extends Controller
{
    /**
     * @param Request $request
     * @param $page
     * @param $cat
     * @return Response
     */
    public function allArticleAction(Request $request, $page, $cat)
    {
        /******* Pagination and display all articles ******/



    }

    private function findArticlesForPagination($page, $nbArticlesByPage, $cat)
    {


    }

    private function paginationParams($page, $articles, $nbArticlesByPage, $cat)
    {

    }

    /**
     * @param Request $request
     * @return Response
     */
    public function addArticleAction(Request $request)
    {

    }


    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateArticleAction(Request $request, $id)
    {


    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteArticleAction(Request $request, $id)
    {


    }



}
