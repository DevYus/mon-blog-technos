<?php

/*
 * @author Ouldamri Youssef
 * @subject for 3W academy
 */

namespace My\TechnosBlogBundle\Controller\Front;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 *  Controller that handle Security Blog
 */

class SecurityController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */

    public function loginAction(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            return $this->redirectToRoute('login');
        }

        $authenticationUtils = $this->get('security.authentication_utils');


        return $this->render('@MyTechnosBlog/Front/Security\login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    /**
     * @throws \Exception
     */

    public function logout()
    {
        throw new \Exception('Ne dois jamais être executé');
    }
}
