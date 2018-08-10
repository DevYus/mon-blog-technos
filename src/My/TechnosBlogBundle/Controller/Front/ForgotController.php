<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\ForgotPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 *  Controller that handle Home Blog
 */

class ForgotController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */

    public function forgotAction(Request $request)
    {
        $info = null;

        $user = new Users();

        $form = $this->get('form.factory')->create(ForgotPasswordType::class, $user);
        $form->handleRequest($request);

        $error = $form->getErrors();

        $emailUser = $request->request->get('email');

        if($form->isSubmitted() && $form->isValid())
        {
            $this->handleLogin($emailUser);
            $info = "Email envoyé";
            $success = true;
        }
        else
        {
            $message = $request->query->get('message');
            if($message == 'expired_token')
            {
                $info = "Votre token de demande de changement de mot de passe est expiré";
                $success = false;
            }
            else if ($message == 'invalid_token')
            {
                $info = "Votre token de demande de changement de mot de passe est invalide";
            }

            $info .= "Tapez votre addresse email et suivez les instructions pour renouveler votre mot de passe ";
            $success = true;
        }

        return $this->render(
            '@MyTechnosBlog/Front/Forgot\forgot.html.twig',
            [
                'form' => $form->createView(),
                'success' => $success,
                'info' => $info,
                'error' => $error
            ]

        );
    }

    /**
     * @param $emailUser
     */

    public function handleLogin($emailUser)
    {
        $requestEmail = $emailUser;
        $dataBaseUser = $this->getDoctrine()->getRepository('TechnosBlogBundle:Users')->findOneByEmail($requestEmail);

        if($dataBaseUser)
        {
            /* Generation of the token */
            $token = bin2hex(openssl_random_pseudo_bytes(16));

            $expiretime = time() + 86400;
            $dataBaseUser->setResetToken($token);
            $dataBaseUser->setResetExpires($expiretime);

            $em = $this->getDoctrine()->getManager();
            $em->persist($dataBaseUser);
            $em->flush();

            /* Send email */

            $webSiteName = 'MBT - Mon blog technos';
            $from = 'ouldamri.youssef@gmail.com';

            $to = $dataBaseUser->getEmail();
            $toName = $dataBaseUser->getFullname();
            $subject = "Demande de réitilisation de mot de passe";
            $link = "/reset?token=".$token;

            /* Link for réinizalisation */

            $resetEmail = (new \Swift_Message($subject.' : '.$webSiteName))
                ->setFrom($from)
                ->setTo($to)
                ->setBody(
                    "<body>
                            <h1>Demande rénisialisation de mot de passe</h1>
                                <p>
                                    Bonjour".$toName."<br>
                                    <br>
                                    Pour pouvoir rénisialiser votre mot de passe veuillez <a href='$link'>cliquez ici</a>
                                </p>
                          </body>"
                );

            $this->get('mailer')->send($resetEmail);
        }

    }

}
