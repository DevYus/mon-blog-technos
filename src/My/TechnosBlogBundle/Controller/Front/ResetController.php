<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Form\ResetPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Class ResetController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class ResetController extends Controller
{

     public function resetAction(Request $request, UserPasswordEncoderInterface $encoder)
     {
         // Check the token

         $token = $request->query->get('token');

         $userToken = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Users')->findOneByResetToken($token);

         if($userToken)
         {
             // Check token expires

             $tokenExpireTime = $userToken->getResetExpires();
             $currentTime = time();

             if($currentTime <= $tokenExpireTime)
             {
                 $form = $this->get('form.factory')->create(ResetPasswordType::class, $userToken);
                 $form->handleRequest($request);

                 if($form->isSubmitted() && $form->isValid())
                 {
                     // Encode the new password of the user
                     $password = $encoder->encodePassword($userToken, $userToken->getPassword());
                     $userToken->setPassword($password);
                     $userToken->setResetToken("");
                     $userToken->setResetExpires(0);

                     $entMa = $this->getDoctrine()->getManager();
                     $entMa->persist($userToken);
                     $entMa->flush();

                     return $this->redirectToRoute('login', ['message' => 'reset_success']);

                 }


                 return $this->render(
                     '@MyTechnosBlog/Front/Reset\reset.html.twig',
                     [
                         'form' => $form->createView(),

                     ]

                 );


             }

              else
              {
                  //If Expired token
                  return $this->redirectToRoute('forgot', ['message' => 'expired_token']);
              }


         }

         else
         {
             // Missing token or invalid token
             return $this->redirectToRoute('forgot', ['message' => 'invalid_token']);
         }





     }




}
