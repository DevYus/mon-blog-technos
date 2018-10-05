<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Users;
use My\TechnosBlogBundle\Form\ForgotPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;


/**
 * Class ForgotController
 * @package My\TechnosBlogBundle\Controller\Front
 */

class ForgotController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function forgotAction(Request $request)
    {
        $info = null;

        $user = new Users();

        $form = $this->get('form.factory')->create(ForgotPasswordType::class, $user);
        $form->handleRequest($request);

        $error = $form->getErrors();


        if($form->isSubmitted() && $form->isValid())
        {
            $this->checkLogin($user);

            $info = "Un Émail vous a été envoyé avec les instructions correspondantes";
            $success = true;

        }
        else
        {
            $message = $request->query->get('message');
            if($message == 'expired_token')
            {
                $info = "Votre token de demande de changement de mot de passe est expiré";

            }
            else if ($message == 'invalid_token')
            {
                $info = "Votre token de demande de changement de mot de passe est invalide";
            }

            $info .= "Tapez votre addresse email et suivez les instructions pour renouveler votre mot de passe ";
            $success = false;
        }

        return $this->render(
            '@MyTechnosBlog/Front/Forgot\forgot.html.twig',
            [
                'form' => $form->createView(),
                'success' => $success,
                'info' => $info,
                'error' => $error,

            ]

        );
    }


    /**
     * @param $user
     * @return bool
     */
    public function checkLogin($user)
    {
        $requestEmail = $user->getEmail();
        $dataBaseUser = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Users')->findOneByEmail($requestEmail);

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
            $from = 'toto@gmail.com';

            $to = $dataBaseUser->getEmail();
            $toName = $dataBaseUser->getFullname();
            $subject = "Demande de réitilisation de mot de passe";
            $link = "http://localhost/mon-blog-technos/web/app_dev.php/reset?token=".$token;

            /* Link for réinizalisation */


            $message = \Swift_Message::newInstance()
                ->setSubject($webSiteName.' - '.$subject)
                ->setFrom($from)
                ->setTo($to)
                ->setContentType("text/html")
                ->setBody("
                            <html>
                                <head>
                                    <title></title>
                                </head>
                                <body>
                                   <h1>Demande réinisialisation de mot de passe</h1>
                                      <p>Bonjour.$toName.<br><br>
                                      Pour pouvoir rénisialiser votre mot de passe veuillez <a href='$link'>cliquez ici</a>
                                     </p>
                                </body>\"
                            </html>
                ");

            # Send the message
            $this->get('mailer')->send($message);

            return true;

        }

        return false;

    }

}
