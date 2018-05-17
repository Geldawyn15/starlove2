<?php

namespace AppBundle\Controller;

use AppBundle\Service\CallApi;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/test", name="test")
     */
    public function ApiTest(){
        $api = new CallApi();
        $Call = $api->getAll();

        return $this->render('test.html.twig', [
            'call' => $Call,
        ]);
    }

}
