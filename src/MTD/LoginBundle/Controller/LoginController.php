<?php

namespace MTD\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('MTDLoginBundle:Login:index.html.twig');
    }
}
