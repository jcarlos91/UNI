<?php

namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\PersonaType;
use HospitalBundle\Entity\Empleado;
use HospitalBundle\Entity\Usuario;
use HospitalBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;

class TrabajadorController extends Controller{
    
    public function nuevoAction(Request $request){
        $persona = new Persona();
        $user = new Usuario();
        $empleado = new Empleado();
        $form = $this->createForm(new PersonaType,$persona);
       
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            try {
                $this->getDoctrine()->getManager()->persist($persona,$user);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateURL('hospital_homepage'));
            } catch (\Exception $e) {
                throw new \Exception("Error Processing Request".$e->getMessage());    			
            }
    	}
    	return $this->render("HospitalBundle:Empleados:nuevo.html.twig",array(
                'form'=>$form->createView(),
            )
    	);        
    }
}
