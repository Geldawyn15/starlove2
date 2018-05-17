<?php
namespace AppBundle\Controller;

use AppBundle\Service\CallApi;
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
    /**
     * @Route("/sylvain", name="sylvain")
     * @Method("GET")
     */
    public function SylvainAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("sylvain.html.twig", array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/cougar", name="cougar")
     * @Method("GET")
     */
    public function CougarAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("cougar.html.twig", array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/cougar", name="cougar")
     */
    public function CougarApi(){
        $api = new CallApi();
        $Cougar = $api->getAllById(4);
        //var_dump($Cougar);

        return $this->render('cougar.html.twig', [
            'cougar' => $Cougar,
        ]);
    }



}