<?php

namespace MTD\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\LoginBundle\Entity\Inscripcion;
use MTD\LoginBundle\Form\InscripcionType;
use Symfony\Component\HttpFoundation\Request;

class EstudianteController extends Controller
{
    public function indexAction()
    {
        return $this->render('MTDLoginBundle:Login:estudianteInicio.html.twig');
    }
    
    public function inscripcionAction(Request $request)
    {
        /*$inscripcion = new Inscripcion();
        $form = $this->createForm(new InscripcionType(),$inscripcion);
        $form->handleRequest($request);
        if($form->isValid()){
            $materia = $form->get('materia')->getData();
            $docente = $form->get('docente')->getData();
            
            if($materia != "" && $docente != ""){
                echo 'correcto';
            }else{
                echo 'Incorrecto';
            }
            return $this->redirect($this->generateUrl('mtd_estudiante_inscripcionMateria'));
        }  
        return $this->render('MTDLoginBundle:Login:estudianteInscripcion.html.twig', array("form"=>$form->createView()));*/
        
        //if (!$request->isXmlHttpRequest()) {
            $inscripcion = new Inscripcion();
            $form = $this->createForm(new InscripcionType(),$inscripcion);
            $form->handleRequest($request);
            //echo 'Hola';
            if($form->isValid()){
                
                //$isAjax = $this->get('Request')->isXMLhttpRequest(); 
                if($request->isXmlHttpRequest()){
                    //$materia =$this->get('request')->request->get('mtd_loginbundle_inscripcion_materia'); 
                    //$docente =$this->get('request')->request->get('mtd_loginbundle_inscripcion_docente');
                    $request = $this->get('request');
                    //$materia = $request->request->get('mtd_loginbundle_inscripcion[materia]');
                    //$docente = $request->request->get('mtd_loginbundle_inscripcion[docente]');
                    $materia = $form->get('materia')->getData();
                    $docente = $form->get('docente')->getData();
                    $inscripcion->setMateria($materia);
                    $inscripcion->setDocente($docente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($inscripcion);
                    //$em->persist($rol);             
                    $em->flush();
                //echo 'Hola';
                    return $this->redirect($this->generateUrl('mtd_estudiante_index'));
                }
            }
            //echo 'Hola';
            return $this->render('MTDLoginBundle:Login:estudianteInscripcion.html.twig', array("form"=>$form->createView()));
        //}
    }
}
