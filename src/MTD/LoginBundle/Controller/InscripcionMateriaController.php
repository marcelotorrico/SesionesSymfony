<?php

namespace MTD\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\LoginBundle\Entity\Inscripcion;
use MTD\LoginBundle\Form\InscripcionType;
use Symfony\Component\HttpFoundation\Request;

class InscripcionMateriaController extends Controller
{
    
    public function inscripcionMateriaAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            $inscripcion = new Inscripcion();
            $form = $this->createForm(new InscripcionType(),$inscripcion);
            $form->handleRequest($request);
            //echo 'Hola';
            //if($form->isValid()){
                
                $isAjax = $this->get('Request')->isXMLhttpRequest(); 
                if($request->isXmlHttpRequest()){
                    $materia =$this->get('request')->request->get('mtd_loginbundle_inscripcion_materia'); 
                    $docente =$this->get('request')->request->get('mtd_loginbundle_inscripcion_docente');
                    $inscripcion->setMateria($materia);
                    $inscripcion->setDocente($docente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($inscripcion);
                    //$em->persist($rol);             
                    $em->flush();
                //echo 'Hola';
                    return $this->redirect($this->generateUrl('mtd_estudiante_inscripcion'));
                }else{
                    //echo 'Hola';
                }
            //}
            //echo 'Hola';
            return $this->render('MTDLoginBundle:Login:inscripcion.html.twig', array("form"=>$form->createView()));
        }
    }
}
