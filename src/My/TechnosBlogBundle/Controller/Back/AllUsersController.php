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
     * @param Request    $request
     * @param Pagination $page
     * @param Category   $cat
     * @return Response
     */
    public function allUsersAction(Request $request, $page, $cat)
    {
        /******* Pagination and display all articles ******/
        $nbUsersByPage = 10;
        $entMa = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $cat = $request->request->get('category');

            $users = $this->findUsersForPagination($entMa, $page, $nbUsersByPage, $cat);
            $user = $entMa->getRepository('MyTechnosBlogBundle:Users')->find(2);

            $pagination = $this->paginationParams($page, $users, $nbUsersByPage, $cat);

            return $this->render('@MyTechnosBlog/Back/AllUsers\allUsers.html.twig', [
                'users' => $users,
                'pagination' => $pagination,
                'user' => $user,
                'cat' => $cat,
            ]);
        } else if ($cat) {
            $users = $this->findUsersForPagination($entMa, $page, $nbUsersByPage, $cat);
            $user = $entMa->getRepository('MyTechnosBlogBundle:Users')->find(2);

            $pagination = $this->paginationParams($page, $users, $nbUsersByPage, $cat);

            return $this->render('@MyTechnosBlog/Back/AllUsers\allUsers.html.twig', [
                'users' => $users,
                'pagination' => $pagination,
                'user' => $user,
                'cat' => $cat,
            ]);
        }

        $users = $entMa->getRepository('MyTechnosBlogBundle:Users')->paginate($page, $nbUsersByPage);
        $user = $entMa->getRepository('MyTechnosBlogBundle:Users')->find(2);

        $pagination = [
            'page' => $page,
            'nbPages' => ceil(count($users) / $nbUsersByPage),
            'routeName' => 'admin_all_users',
            'paramsRoute' => [],
        ];

        return $this->render('@MyTechnosBlog/Back/AllUsers\allUsers.html.twig', [
            'users' => $users,
            'pagination' => $pagination,
            'user' => $user,
        ]);
    }

    /**
     * @param Request    $request
     * @param Parameters $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteUserAction(Request $request, $id)
    {
        $entMa = $this->getDoctrine()->getManager();
        $user = $entMa->getRepository('MyTechnosBlogBundle:Users')->find($id);

        $form = $this->get('form.factory')->create(DeleteUserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Flush to database
            $entMa = $this->getDoctrine()->getManager();
            $entMa->remove($user);
            $entMa->flush();

            $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur a bien été supprimé');

            return $this->redirectToRoute('admin_all_users', array('page' => 1));
        }

        return $this->render('@MyTechnosBlog/Back/DeleteUser\deleteUser.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
     * @param \Doctrine  $entMa
     * @param Pagination $page
     * @param Parameters $nbUsersByPage
     * @param Category   $cat
     * @return mixed
     */
    private function findUsersForPagination($entMa, $page, $nbUsersByPage, $cat)
    {
        return $entMa->getRepository('MyTechnosBlogBundle:Users')->paginate($page, $nbUsersByPage, $cat);
    }

    /**
     * @param Pagination $page
     * @param \Users     $users
     * @param Parameters $nbUsersByPage
     * @param Catgeory   $cat
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
            ],
        ];
    }
}
