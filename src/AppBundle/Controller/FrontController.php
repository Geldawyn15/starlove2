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
     * @Route("/accueil", name="homepage")
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
     * @Route("/edouard", name="edouard")
     * @Method("GET")
     */
    public function EdouardAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("edouard.html.twig", array(
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
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
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
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
        $_SESSION['id'] = $id;

        return $this->render('cougar/cougar.html.twig', [
            'cougar' => $Cougar,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
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
        $_SESSION['idJedi'] = $id;

        return $this->render('jedi/jedi.html.twig', [
            'jedi' => $Jedi,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
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
        $_SESSION['idRobot'] = $id;


        return $this->render('droide/robot.html.twig', [
            'robot' => $Robot,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
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
     * @Route("/question1", name="question1")
     * @Method("GET")
     */
    public function Question1Action(Request $request)
    {
        $api = new CallApi();
        $array = [4, 6, 26, 41, 72];
        $id = $_SESSION['id'];
        $Cougar = $api->getAllById($array[$id]);


        return $this->render('cougar/cougarQuestion1.html.twig', [
            'cougar' => $Cougar,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

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



    
     /**
      * @Route("/question2", name="question2")
     * @Method("GET")
     */
    public function Question2Action(Request $request)
    {
        $api = new CallApi();
        $array = [4, 6, 26, 41, 72];
        $id = $_SESSION['id'];
        $Cougar = $api->getAllById($array[$id]);

        return $this->render('cougar/cougarQuestion2.html.twig', [
            'cougar' => $Cougar,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question3", name="question3")
         * @Method("GET")
         */
    public function Question3Action(Request $request)
    {
        $api = new CallApi();
        $array = [4, 6, 26, 41, 72];
        $id = $_SESSION['id'];
        $Cougar = $api->getAllById($array[$id]);

        return $this->render('cougar/cougarQuestion3.html.twig', [
            'cougar' => $Cougar,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question4", name="question4")
         * @Method("GET")
         */
        public function Question4Action(Request $request)
    {
        $api = new CallApi();
            $array = [0, 30, 42, 49, 50];
        $id = $_SESSION['idJedi'];
        $Jedi = $api->getAllById($array[$id]);



        return $this->render('jedi/jediQuestion4.html.twig', [
            'jedi' => $Jedi,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question5", name="question5")
         * @Method("GET")
         */
        public function Question5Action(Request $request)
    {
        $api = new CallApi();
        $array = [0, 30, 42, 49, 50];
        $id = $_SESSION['idJedi'];
        $Jedi = $api->getAllById($array[$id]);


        return $this->render('jedi/jediQuestion5.html.twig', [
            'jedi' => $Jedi,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question6", name="question6")
         * @Method("GET")
         */
        public function Question6Action(Request $request)
    {
        $api = new CallApi();
        $array = [0, 30, 42, 49, 50];
        $id = $_SESSION['idJedi'];
        $Jedi = $api->getAllById($array[$id]);


        return $this->render('jedi/jediQuestion6.html.twig', [
            'jedi' => $Jedi,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question7", name="question7")
         * @Method("GET")
         */
        public function Question7Action(Request $request)
    {
        $api = new CallApi();
        $array = [1, 2, 7, 73, 85];
        $id = $_SESSION['idRobot'];
        $Robot = $api->getAllById($array[$id]);



        return $this->render('droide/droideQuestion7.html.twig', [
            'robot' => $Robot,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

        /**
         * @Route("/question8", name="question8")
         * @Method("GET")
         */
        public function Question8Action(Request $request)
    {
        $api = new CallApi();
        $array = [1, 2, 7, 73, 85];
        $id = $_SESSION['idRobot'];
        $Robot = $api->getAllById($array[$id]);


        return $this->render('droide/droideQuestion8.html.twig', [
            'robot' => $Robot,
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species']
        ]);

    }

 

    /**
     * @Route("/jonbrisé2", name="jonbrisé2")
     */
    public function Jonbrisé2Action(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("jonbrisé2.html.twig");
    }

    /**
     * @Route("/jonbrisé3" , name="jonbrisé3")
     */
    public function Jonbrisé3Action(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("jonbrisé3.html.twig");
    }

    /**
     * @Route("/succes" , name="succes")
     */
    public function SuccesAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        return $this->render("success.html.twig");
    }

    /**
     * @Route("/profil" , name="profil" )
     */
    public function ProfilAction(Request $request)
    {
        $api = new CallApi();
        $form = $this->createForm('AppBundle\Form\FilterType');
        $form->handleRequest($request);

        $array1 = [4, 6, 26, 41, 72];
        $array2 = [0, 30, 42, 49, 50];
        $array3 = [1, 2, 7, 73, 85];

        $Cougar = $_SESSION['id'];
        $Jedi = $_SESSION['idJedi'];
        $Robot = $_SESSION['idRobot'];

        $Cougar = $api->getAllById($array1[$Cougar]);
        $Jedi = $api->getAllById($array2[$Jedi]);
        $Robot = $api->getAllById($array3[$Robot]);





        return $this->render("profil.html.twig", [
            'image' => $_SESSION['image'],
            'username' => $_SESSION['username'],
            'species' => $_SESSION['species'],
            'cougar' => $Cougar,
            'jedi' => $Jedi,
            'robot' => $Robot,

        ]);
    }
 

}