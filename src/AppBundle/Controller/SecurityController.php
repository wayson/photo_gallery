<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render('security/login.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        return $this->render('security/logout.html.twig', array(
            // ...
        ));
    }

}
