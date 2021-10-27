<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Form\ResetPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class ResettingController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class ResettingController extends Controller
{
    /**
     * @param Request                      $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function resettingAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // Get the token of the url
         $token = $request->query->get('token');
        
        // Get the user with if the token is not null 
        if($token =! null) {
            $userToken = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Users')->findOneByResetToken($token);
        }
        
        // If the user is found
        if ($userToken) {
             $tokenExpireTime = $userToken->getResetExpires();
             $currentTime = time();

             // If the timestamp token is greater that the current time, the link is expire
            if ($currentTime <= $tokenExpireTime) {
                 $form = $this->get('form.factory')->create(ResetPasswordType::class, $userToken);
                 $form->handleRequest($request);
                
                 // submit form to reset password if valid
                if ($form->isSubmitted() && $form->isValid()) {
                     // Encode the new password of the user
                     $password = $encoder->encodePassword($userToken, $userToken->getPassword());
                     $userToken->setPassword($password);
                     $userToken->setResetToken("");
                     $userToken->setResetExpires(0);

                     $entMa = $this->getDoctrine()->getManager();
                     $entMa->persist($userToken);
                     $entMa->flush();

                     $flash = $this->addFlash("success-reset", "Votre mot de passe a bien été modifié");

                     return $this->redirectToRoute('login');
                }

                 return $this->render(
                     '@MyTechnosBlog/Front/Resetting\resetting.html.twig',
                     [
                         'form' => $form->createView(),

                     ]
                 );
            } else {
                 //If Expired token
                 return $this->redirectToRoute('forgot', ['message' => 'expired_token']);
            }
        } else {
             return $this->redirectToRoute('forgot', ['message' => 'invalid_token']);
        }
    }
}
