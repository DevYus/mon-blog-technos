<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\UsersType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Class RegistrationController
 * @package My\TechnosBlogBundle\Controller\Front
 */

class RegistrationController extends Controller
{

    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function registrationAction(Request $request, UserPasswordEncoderInterface $encoder)
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
            $user->setRoles(['ROLE_USER']);

            // Flush to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render(
            '@MyTechnosBlog/Front/Registration\registration.html.twig',
            [ 'form' => $form->createView()]
        );
    }
}
