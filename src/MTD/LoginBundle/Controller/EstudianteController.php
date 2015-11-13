<?php

namespace MTD\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstudianteController extends Controller
{
    public function indexAction()
    {
        return $this->render('MTDLoginBundle:Login:estudianteInicio.html.twig');
    }
}
