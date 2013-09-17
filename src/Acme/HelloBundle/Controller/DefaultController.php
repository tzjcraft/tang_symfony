<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction($name, $color, $aaa)
    {
//        return new Response('Hello ' . $name, 200);
        return $this->render('AcmeHelloBundle:Default:index.html.twig',
                        array('name' => $name, 'color' => $color, 'aaa' => $aaa));
    }

}
