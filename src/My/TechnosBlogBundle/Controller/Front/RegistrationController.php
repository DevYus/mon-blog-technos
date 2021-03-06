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
     * @param Request                      $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registrationAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new Users();
        $form = $this->get('form.factory')->create(UsersType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode password of the user
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Set default role user
            $user->setRoles(['ROLE_USER']);

            // Flush to database
            $entMa = $this->getDoctrine()->getManager();
            $entMa->persist($user);
            $entMa->flush();

            $flash = $this->addFlash("success", "Merci de vous être inscrit. Vous pouvez désormais vous connecter.");

            return $this->redirectToRoute('login');
        }

        return $this->render(
            '@MyTechnosBlog/Front/Registration\registration.html.twig',
            [ 'form' => $form->createView()]
        );
    }
}
