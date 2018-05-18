<?php
namespace AppBundle\Controller;


use AppBundle\Entity\Image;
use AppBundle\Form\LoginType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
     * @Route("/", name="login")
     * @Method({"GET", "POST"})
     */
    public function LoginAction(Request $request)
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $_SESSION['username'] = $data['username'];
            $_SESSION['species'] = $data['species'];

            /** @var UploadedFile $file */
            $file = $data['image'];

            $fileName = 'image.png';
            $file->move($this->getParameter('image_directory'), $fileName);
            $image = 'assets/'.$fileName;
            $_SESSION['image'] =  $image ;

            return $this->redirectToRoute('homepage');
        }


        return $this->render("login/login.html.twig", array(
            'form' => $form->createView()
        ));
    }


}