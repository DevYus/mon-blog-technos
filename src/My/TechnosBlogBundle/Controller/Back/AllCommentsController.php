<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Form\DeleteType;
use My\TechnosBlogBundle\Entity\Comments;
use My\TechnosBlogBundle\Entity\Articles;

/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AllCommentsController extends Controller
{

    /**
     * @param $page
     * @return Response
     */
    public function allCommentsAction($page)
    {


    }

    public function deleteCommentAction(Request $request, $id)
    {


    }




}
