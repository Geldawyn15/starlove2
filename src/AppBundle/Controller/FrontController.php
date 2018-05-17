<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{



    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function HomepageAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("homepage.html.twig", array(
            'form' => $form->createView()
        ));
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

    /**
     * @Route("/edouard", name="edouard")
     * @Method("GET")
     */
    public function EdouardAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("edouard.html.twig", array(
            'form' => $form->createView()
        ));
    }



}