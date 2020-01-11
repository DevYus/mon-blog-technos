<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SecurityController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class SecurityController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function loginAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
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
