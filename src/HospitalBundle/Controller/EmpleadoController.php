<?php 
namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\TipoEmpleadoType;
use HospitalBundle\Entity\TipoEmpleado;
use Symfony\Component\HttpFoundation\Request;

class EmpleadoController extends Controller{

	public function nuevoAction(Request $request){
		$tipoEmpleado = new TipoEmpleado();
		$form = $this->createForm(new TipoEmpleadoType, $tipoEmpleado);
		$form->handleRequest($request);
    	if($form->isValid() && $form->isSubmitted()){
    		try {
				$this->getDoctrine()->getManager()->persist($tipoEmpleado);
    			$this->getDoctrine()->getManager()->flush();
    			return $this->redirect($this->generateURL('hospital_homepage'));
    		} catch (\Exception $e) {
    			throw new \Exception("Error Processing Request".$e->getMessage());    			
    		}
    	}
    	return $this->render("HospitalBundle:TipoEmpleado:nuevo.html.twig",array(
    		'form'=>$form->createView(),
    		)
    	);
	}

	public function editarAction(Request $request, TipoEmpleado $tipoEmpleado){
        $form = $this->createForm(new TipoEmpleadoType(), $tipoEmpleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            try{
                $this->getDoctrine()->getManager()->persist($tipoEmpleado);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('hospital_homepage');
            }catch(\Exception $e){
                throw new \Exception("Error al actualizar los datos. ".$e->getMessage());
            }
        }

        return $this->render('HospitalBundle:TipoEmpleado:editar.html.twig',array(
            "tipoEmpleado" =>$tipoEmpleado,
            'form'   => $form->createView()
        ));
    }

    public function tiposAction(){
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoEmpleado");
        $tipoEmpleado = $repository->findAll();//trae todos los registros del repositorio

        return $this->render('HospitalBundle:TipoEmpleado:tipos.html.twig',array(
            "tipoEmpleado"=>$tipoEmpleado)
        );
    }

    public function detalleAction($id){ 
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoEmpleado");
        $tipoEmpleado = $repository->find($id);//trae todos los registros del repositorio

        return $this->render('HospitalBundle:TipoEmpleado:detalle.html.twig',array(
            "tipoEmpleado"=>$tipoEmpleado)
        );
    }

    public function eliminarAction($id){
        try{
            $repository = $this->getDoctrine()->getRepository("HospitalBundle:TipoEmpleado");
            $TipoEmpleado = $repository->find($id);
            $this->getDoctrine()->getManager()->remove($tipoEmpleado);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('hospital_homepage');
        }catch(\Exception $e){
            throw new \Exception("Error Processing Request".$e->getMessage());
            
        }
    }
}