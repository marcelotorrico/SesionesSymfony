<?php

namespace MTD\RegistroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\RegistroBundle\Entity\Estudiante;
use MTD\RegistroBundle\Entity\Roles;
use MTD\RegistroBundle\Form\EstudianteType;
use Symfony\Component\HttpFoundation\Request;

class RegistroController extends Controller
{
    public function indexAction(Request $request)
    {
        $estudiante = new Estudiante();
        $form = $this->createForm(new EstudianteType(),$estudiante);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $usuario = $form->get('usuario')->getData();
            $correo = $form->get('correo')->getData();
            if(!$this->validarUsuariosRepetidos($usuario, $correo)){
                $this->addFlash(
                'notice',
                'El usuario ya fue registrado'
                );
                return $this->redirect($this->generateUrl('mtd_registro'));
            }else{
                $this->addFlash(
                    'notice',
                    'Se registro correctamente el usuario'
                );
                //$plainPassword = 'ryanpass';
                //$encoder = $this->container->get('security.password_encoder');
                //$encoded = $encoder->encodePassword($estudiante, $plainPassword);

                //$estudiante->setContrasena($encoded);

                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($estudiante);
                $password = $encoder->encodePassword($estudiante->getContrasena(), $estudiante->getSalt());
                $estudiante->setContrasena($password);
                
                $em = $this->getDoctrine()->getManager();
                //$rol = new Roles();
                $rol = $em->getRepository('MTDRegistroBundle:Roles')->findOneByRole('ROLE_USER');
                //$rol->setRole('ROLE_USER');
                $estudiante->getRoles()->add($rol);
                
                
                $em->persist($estudiante);
                $em->flush();
                
                return $this->redirect($this->generateUrl('mtd_registro'));
            }
        }
        return $this->render('MTDRegistroBundle:Registro:index.html.twig', array("form"=>$form->createView()));
    }
    
    public function validarUsuariosRepetidos($usuario, $correo){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $usuarioRegistrado = $em->getRepository('MTDRegistroBundle:Estudiante')->findByUsuario($usuario);
        $correoRegistrado  = $em->getRepository('MTDRegistroBundle:Estudiante')->findByCorreo($correo);
        if(!$usuarioRegistrado && !$correoRegistrado){
            $res = true;
        }
        return $res;
    }
}
