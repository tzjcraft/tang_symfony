<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name, $color, $aaa)
    {
        return $this->render('AcmeHelloBundle:Default:index.html.twig',
                        array('name' => $name, 'color' => $color, 'aaa' => $aaa));
    }

}
