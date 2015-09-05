<?php 
namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\PersonaType;
use HospitalBundle\Entity\Persona;
use HospitalBundle\Form\TratamientoType;
use HospitalBundle\Entity\Tratamiento;
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
            'form'=>$form->createView(),)
        );
    }
    
    public function editarAction(Request $request, Persona $persona){
        $form = $this->createForm(new PersonaType(),$persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            try{
                $this->getDoctrine()->getManager()->persist($persona);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('hospital_homepage');
            }catch(\Exception $e){
                throw new \Exception("Error al actualizar los datos. ".$e->getMessage());
            }
        }

        return $this->render('HospitalBundle:Paciente:editar.html.twig',array(
            "persona" =>$persona,
            'form'   => $form->createView()
        ));
    }
    
    public function buscarAction(){
        return $this->render('HospitalBundle:Paciente:buscar.html.twig');
    }
    
    public function busquedaAction(Request $request){
        $getData = $request->query->all();
        $postData = $request->request->all();
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:Persona");
        $paciente = $repository->findOneBy(['nombre' => $postData['patientName']]);//trae todos los registros del repositorio

        $tratamiento = new Tratamiento();
        $form = $this->createForm(new TratamientoType, $tratamiento);
        $form->handleRequest($request);
        
        return $this->render('HospitalBundle:Paciente:busqueda.html.twig',array(
            "request"=>$request, 
            "result" => $paciente,
            'form'=> $form->createView()
            )
        );        
    }
    
    public function tratamientoAction(Request $request){
        if($form->isValid() && $form->isSubmitted()){
            try {
                $this->getDoctrine()->getManager()->persist($tratamiento);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateURL('hospital_homepage'));
        } catch (\Exception $ex) {
                throw new \Exception("Error Processing Request".$e->getMessage());    			
            }
        }
    }
}