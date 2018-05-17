<?php
namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Method({"GET", "POST"})
     */
    public function LoginAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\LoginType', $user);
        $form->handleRequest($request);

        return $this->render("Front/login.html.twig", array(
            'form' => $form->createView()
        ));
    }
}