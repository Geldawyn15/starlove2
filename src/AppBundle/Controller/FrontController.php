<?php
namespace AppBundle\Controller;

use AppBundle\Service\CallApi;
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
        $array = [4, 6, 26, 41, 72];
        $id = array_rand($array);
        $Cougar = $api->getAllById($array[$id]);

        return $this->render('cougar.html.twig', [
            'cougar' => $Cougar,
        ]);
    }
    /**
     * @Route("/jedi", name="jedi")
     */
    public function JediApi(){
        $api = new CallApi();
        $array = [0, 30, 42, 49, 50];
        $id = array_rand($array);
        $Jedi = $api->getAllById($array[$id]);

        return $this->render('jedi.html.twig', [
            'jedi' => $Jedi,
        ]);
    }
    /**
     * @Route("/robot", name="robot")
     */
    public function RobotApi(){
        $api = new CallApi();
        $array = [1, 2, 7, 73, 85];
        $id = array_rand($array);
        $Robot = $api->getAllById($array[$id]);

        return $this->render('robot.html.twig', [
            'robot' => $Robot,
        ]);
    }
    /**
     * @Route("/jonbrisé", name="jonbrisé")
     */
    public function JonbriséAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("jonbrisé.html.twig");
    }

    /**
     * @Route("/vader", name="vader")
     */
    public function VaderAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("vader.html.twig");
    }


}