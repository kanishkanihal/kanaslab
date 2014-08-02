<?php

namespace Acme\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeAuthBundle:Default:index.html.twig', array('name' => $name));
    }
}
