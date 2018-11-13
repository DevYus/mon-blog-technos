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




}
