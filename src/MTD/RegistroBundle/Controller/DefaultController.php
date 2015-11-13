<?php

namespace MTD\RegistroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MTDRegistroBundle:Default:index.html.twig', array('name' => $name));
    }
}
