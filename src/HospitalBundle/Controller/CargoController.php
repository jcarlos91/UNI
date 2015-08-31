<?php  

namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\CargoType;
use HospitalBundle\Entity\Cargo;
use Symfony\Component\HttpFoundation\Request;

class CargoController extends Controller{
	public function nuevoAction(Request $request){
		$cargo = new Cargo();
		$form = $this->createForm(new CargoType, $cargo);
		$form->handleRequest($request);
    	if($form->isValid() && $form->isSubmitted()){
    		try {
				$this->getDoctrine()->getManager()->persist($usuario);
    			$this->getDoctrine()->getManager()->flush();
    			return $this->redirect($this->generateURL('hospital_cargos_nuevo'));
    		} catch (\Exception $e) {
    			throw new \Exception("Error Processing Request".$e->getMessage());    			
    		}
    	}
    	return $this->render("HospitalBundle:Cargos:nuevo.html.twig",array(
    		'form'=>$form->createView(),
    		)
    	);
	}

    public function editarAction(Request $request, Cargo $cargo){
        $form = $this->createForm(new AlumnosType(), $cargo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            try{
                $this->getDoctrine()->getManager()->persist($cargo);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('hospital_cargos_nuevo');
            }catch(\Exception $e){
                throw new \Exception("Error al actualizar los datos. ".$e->getMessage());
            }
        }

        return $this->render('HospitalBundle:Cargos:editar.html.twig',array(
            "cargo" =>$cargo,
            'form'   => $form->createView()
        ));
    }

    public function cargosAction(){
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:Cargo");
        $cargos = $repository->findAll();//trae todos los registros del repositorio

        return $this->render('HospitalBundle:Cargos:cargos.html.twig',array(
            "cargos"=>$cargos)
        );
    }

    public function eliminarAction($id){
         try{
            $repository = $this->getDoctrine()->getRepository("HospitalBundle:Cargo");
            $cargo = $repository->find($id);
            $this->getDoctrine()->getManager()->remove($cargo);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('hospital_homepage');
        }catch(\Exception $e){
            throw new \Exception("Error Processing Request".$e->getMessage());
            
        }
    }

    public function detalleAction($id){
        $repository = $this->getDoctrine()->getRepository("HospitalBundle:Cargo");
        $cargo = $repository->find($id);//trae todos los registros del repositorio

        return $this->render('HospitalBundle:Cargos:detalle.html.twig',array(
            "cargos"=>$cargos)
        );
    }
}