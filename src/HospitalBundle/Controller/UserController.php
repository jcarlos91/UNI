<?php

namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\UsuarioType;
use HospitalBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller{
    public function indexAction($name){
        return $this->render('HospitalBundle:Default:index.html.twig', array('name' => $name));
    }

    public function nuevoAction(Request $request){
    	$usuario = new Usuario();
    	$form = $this->createForm(new UsuarioType(), $usuario);
    	$form->handleRequest($request);
    	if($form->isValid() && $form->isSubmitted()){
    		try {
    			$factory = $this->get('security.encoder_factory');
                        $encoder = $factory->getEncoder($usuario);
                        $password = $encoder->encodePassword($request, $usuario->getSalt());
                        $usuario->setPassword($password);
                        $this->getDoctrine()->getManager()->persist($usuario);
    			$this->getDoctrine()->getManager()->flush();
    			return $this->redirect($this->generateURL('hospital_usuario_nuevo'));
    		} catch (\Exception $e) {
    			throw new \Exception("Error Processing Request".$e->getMessage());    			
    		}
    	}

    	return $this->render("HospitalBundle:Usuario:nuevo.html.twig",array(
    		'form'=>$form->createView(),
    		)
    	);
    }
}
