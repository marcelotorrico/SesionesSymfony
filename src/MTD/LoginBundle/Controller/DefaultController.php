<?php

namespace MTD\LoginBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    //public function indexAction($name)
    public function adminAction()
    {
        //return $this->render('MTDLoginBundle:Default:index.html.twig', array('name' => $name));
        return new Response('<html><body>Admin page!</body></html>');
    }
}
