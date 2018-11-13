<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Form\DeleteUserType;


/**
 * Class AllUsersController
 * @package My\TechnosBlogBundle\Controller\Back
 */
class AllUsersController extends Controller
{
    /**
     * @param Request $request
     * @param $page
     * @param $cat
     * @return Response
     */
    public function allUsersAction(Request $request, $page, $cat)
    {








    }

    /**
     * @param $entMa
     * @param $page
     * @param $nbUsersByPage
     * @param $cat
     * @return mixed
     */

    private function findUsersForPagination($entMa,$page, $nbUsersByPage, $cat)
    {
        return $entMa->getRepository('MyTechnosBlogBundle:Users')->paginate($page, $nbUsersByPage, $cat);

    }

    /**
     * @param $page
     * @param $users
     * @param $nbUsersByPage
     * @param $cat
     * @return array
     */
    private function paginationParams($page, $users, $nbUsersByPage, $cat)
    {
        return $pagination = [
            'page' => $page,
            'nbPages' => ceil(count($users) / $nbUsersByPage),
            'routeName' => 'admin_all_users',
            'paramsRoute' => [
                'cat' => $cat,
            ]
        ];
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteUserAction(Request $request, $id)
    {


    }





}
