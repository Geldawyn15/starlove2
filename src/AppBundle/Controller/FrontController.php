<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{

    /**
     * @Route("/registration", name="registration")
     * @Method({"GET", "POST"})
     */
    public function RegistrationAction()
    {
        return $this->render("Front/registration.html.twig");
    }

    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function HomepageAction()
    {
        return $this->render("Front/homepage.html.twig");
    }

    /**
     * @Route("/profil", name="profil")
     * @Method({"GET", "POST"})
     */
    public function ProfilAction()
    {
        return $this->render("Front/profil.html.twig");
    }

    /**
     * @Route("/message", name="message")
     * @Method({"GET", "POST"})
     */
    public function MessageAction()
    {
        return $this->render("Front/message.html.twig");
    }



}