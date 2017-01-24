<?php

namespace AppBundle\Controller;

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
        $em = $this->getDoctrine()->getManager();
        $variables = $em->getRepository('AppBundle:Post')->getSuperChien();
        // $test= $this->get('file.manager.image');  Exemple d'appel d'un service créé à la main

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'variables' => $variables
        ]);
    }
}
