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

        if ($form->isSubmitted() && $form->isValid()) {
            $this->checkLogin($user);
            $info = "Un Émail vous a été envoyé avec les instructions correspondantes. 
                     Si vous ne reçevez rien dans les minutes qui suivent, veuillez vérifier vos mails.";
            $success = true;
        } else {
            $message = $request->query->get('message');
            if ($message == 'expired_token') {
                $info = "Votre token de demande de changement de mot de passe est expiré";
            } else if ($message == 'invalid_token') {
                $info = "Votre token de demande de changement de mot de passe est invalide";
            }

            $info .= "Tapez votre adresse email et suivez les instructions pour renouveler votre mot de passe ";
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
     * @param \Users $user
     * @return bool
     */
    private function checkLogin($user)
    {
        $requestEmail = $user->getEmail();
        $dataBaseUser = $this->getDoctrine()->getRepository('MyTechnosBlogBundle:Users')->findOneByEmail($requestEmail);

        if ($dataBaseUser) {
            /* Generation of the token */
            $token = bin2hex(openssl_random_pseudo_bytes(16));

            $expiretime = time() + 86400;
            $dataBaseUser->setResetToken($token);
            $dataBaseUser->setResetExpires($expiretime);

            $entMa = $this->getDoctrine()->getManager();
            $entMa->persist($dataBaseUser);
            $entMa->flush();

            /* Send email */

            $webSiteName = 'MBT - Mon blog technos';
            $from = 'youssef.ouldamri@monblogtechnos.fr';

            $to = $dataBaseUser->getEmail();
            $toName = $dataBaseUser->getUsername();
            $subject = "Demande de réinitialisation de mot de passe";
            $link = "https://monblogtechnos.fr/resetting?token=" . $token;

            /* Link for réinizalisation */


            $message = \Swift_Message::newInstance()
                ->setSubject($webSiteName . ' - ' . $subject)
                ->setFrom($from)
                ->setTo($to)
                ->setContentType("text/html")
                ->setBody("
                            <html>
                                <head>
                                    <title></title>
                                </head>
                                <body>
                                   <h1>Demande réinitialisation de mot de passe</h1>
                                      <p>Bonjour " . $toName . "<br>
                                      Pour pouvoir réinitialiser votre mot de passe veuillez <a href='$link'>cliquez ici</a><br>
                                      <br>
                                      L'équipe
                                     </p>
                                </body>
                            </html>
                ");

            // Send the message
            $this->get('mailer')->send($message);

            return true;

        }

        return false;
    }

}
