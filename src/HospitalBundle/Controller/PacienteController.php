<?php 
namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\PersonaType;
use HospitalBundle\Entity\Paciente;
use HospitalBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;

class PacienteController extends Controller{
	public function nuevoAction(Request $request){
		$persona = new Persona();
		$form = $this->createForm(new PersonaType(), $persona);
		$form->HandleRequest($request);
		if($form->isValid() && $form->isSubmitted()){
    		try {
				$this->getDoctrine()->getManager()->persist($persona);
    			$this->getDoctrine()->getManager()->flush();
    			return $this->redirect($this->generateURL('hospital_paciente_nuevo'));
    		} catch (\Exception $e) {
    			throw new \Exception("Error Processing Request".$e->getMessage());    			
    		}
    	}
    	return $this->render("HospitalBundle:Paciente:nuevo.html.twig",array(
    		'form'=>$form->createView(),
    		)
    	);
	}
}