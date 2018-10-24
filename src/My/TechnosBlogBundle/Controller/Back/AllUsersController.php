<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AllUsersController extends Controller
{
    /**
     * @param $page
     * @return Response
     */
    public function allUsersAction($page)
    {
        /******* Pagination and display all articles ******/

        $nbUsersByPage = 8;

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('MyTechnosBlogBundle:Users')->paginate($page, $nbUsersByPage);

        $user = $em->getRepository('MyTechnosBlogBundle:Users')->find(2);

        $pagination = [
            'page' => $page,
            'nbPages' => ceil(count($users) / $nbUsersByPage),
            'routeName' => 'admin_all_users',
            'paramsRoute' => []
        ];


        return $this->render('@MyTechnosBlog/Back/AllUsers\allUsers.html.twig', [
            'users' => $users,
            'pagination' => $pagination,
            'user' => $user
        ]);



    }

}
