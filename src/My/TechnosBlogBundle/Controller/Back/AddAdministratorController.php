<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\UsersType;



/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AddAdministratorController extends Controller
{
    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addAdministratorAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new Users();
        $form = $this->get('form.factory')->create(UsersType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Encode password of the user
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Set default token
            $token = bin2hex(openssl_random_pseudo_bytes(16));
            $user->setResetToken($token);
            $user->setResetExpires(0);

            // Set default role user
            $user->setRoles(['ROLE_ADMIN']);

            // Flush to database
            $entMa = $this->getDoctrine()->getManager();
            $entMa->persist($user);
            $entMa->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Un nouvel administrateur à été crée');

            return $this->redirectToRoute('admin_all_users');
        }

        return $this->render('@MyTechnosBlog/Back/AddAdministrator\addAdministrator.html.twig',
            [
                'form' => $form->createView()
            ]);

    }


}
