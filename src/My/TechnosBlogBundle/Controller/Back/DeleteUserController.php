<?php

namespace My\TechnosBlogBundle\Controller\Back;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Form\DeleteUserType;


/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class DeleteUserController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteUserAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MyTechnosBlogBundle:Users')->find($id);

        $form = $this->get('form.factory')->create(DeleteUserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur a bien été supprimé');

            return $this->redirectToRoute('admin_all_users', array('page' => 1));

        }

        return $this->render('@MyTechnosBlog/Back/DeleteUser\deleteUser.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user

            ]);
    }

}
