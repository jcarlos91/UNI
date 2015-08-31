<?php 
namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\TipoTratamientoType;
use HospitalBundle\Entity\TipoTratamiento;
use Symfony\Component\HttpFoundation\Request;

class TratamientoController extends Controller{

	public function nuevoAction(Request $request){
		$tipoTratamiento = new TipoTratamiento();
		$form = $this->createForm(new TipoTratamientoType, $tipoTratamiento);
		$form->handleRequest($request);
    	if($form->isValid() && $form->isSubmitted()){
    		try {
				$this->getDoctrine()->getManager()->persist($tipoTratamiento);
    			$this->getDoctrine()->getManager()->flush();
    			return $this->redirect($this->generateURL('hospital_homepage'));
    		} catch (\Exception $e) {
    			throw new \Exception("Error Processing Request".$e->getMessage());    			
    		}
    	}
    	return $this->render("HospitalBundle:TipoTratamiento:nuevo.html.twig",array(
    		'form'=>$form->createView(),
    		)
    	);
	}

	public function editarAction(Request $request, TipoTratamiento $tipoTratamiento){
        $form = $this->createForm(new TipoTratamientoType(), $tipoTratamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            try{
                $this->getDoctrine()->getManager()->persist($tipoTratamiento);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('hospital_homepage');
            }catch(\Exception $e){
                throw new \Exception("Error al actualizar los datos. ".$e->getMessage());
            }
        }

        return $this->render('HospitalBundle:TipoTratamiento:editar.html.twig',array(
            "tipoTratamiento" =>$tipoTratamiento,
            'form'   => $form->createView()
        ));
    }

    public function tiposAction(){
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoTratamiento");
        $tipoTratamiento = $repository->findAll();//trae todos los registros del repositorio

        return $this->render('HospitalBundle:TipoTratamiento:tipos.html.twig',array(
            "tipoTratamiento"=>$tipoTratamiento)
        );
    }

    public function detalleAction($id){ 
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoTratamiento");
        $tipoTratamiento = $repository->find($id);//trae todos los registros del repositorio

        return $this->render('HospitalBundle:TipoTratamiento:detalle.html.twig',array(
            "tipoTratamiento"=>$tipoTratamiento)
        );
    }

    public function eliminarAction($id){
        try{
            $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoTratamiento");
            $TipoTratamiento = $repository->find($id);
            $this->getDoctrine()->getManager()->remove($tipoTratamiento);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('hospital_homepage');
        }catch(\Exception $e){
            throw new \Exception("Error Processing Request".$e->getMessage());
            
        }
    }
}