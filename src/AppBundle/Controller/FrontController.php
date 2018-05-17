<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;


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
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species'],
            'image' => $_SESSION['image']
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