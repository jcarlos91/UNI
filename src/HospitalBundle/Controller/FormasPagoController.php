<?php 
namespace HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HospitalBundle\Form\FormaDePagoType;
use HospitalBundle\Entity\FormaDePago;
use Symfony\Component\HttpFoundation\Request;

class FormasPagoController extends Controller{
	public function formasAction()  {
		$repository = $this->getDoctrine()->getRepository("HospitalBundle:FormaDePago");
		$formasPago = $repository->findAll();//trae todo los registros de a tabla

		return $this->render('HospitalBundle:FormasPago:formas.html.twig',array(
			'formasPago'=>$formasPago
			)
		);
	}

	public function detalleAction($id){
		$repository = $this->getDoctrine()->getRepository("HospitalBundle:FormaDePago");
		$formasPago = $repository->find($id);

		return $this->render('HospitalBundle:FormasPago:detalle.html.twig',array(
			'formasPago'=>$formasPago
			)
		);
	}

	public function nuevoAction(Request $request){
		$formasPago = new FormaDePago();
		$form = $this->createForm(new FormaDePagoType(), $formasPago);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			try {
				$this->getDoctrine()->getManager()->persist($formasPago);
				$this->getDoctrine()->getManager()->fLush();
				return $this->redirect($this->generateURL('hospital_formas_pago_nuevo'));
			} catch (\Exception $e) {
				throw new \Exception("Error Processing Request".$e->getMessage());
			}
		}

		return $this->render('HospitalBundle:FormasPago:nuevo.html.twig',array(
			'form'=>$form->createView()
			)
		);
	}

	public function editarAction(Request $request, FormaDePago $formasPago){
		$form = $this->createForm(new FormaDePagoType(), $formasPago);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			try {
				$this->getDoctrine()->getManager()->persist($formasPago);
				$this->getDoctrine()->getManager()->flush();
				return $this->redirectToRoute('hospital_formas_pago');
			} catch (\Exception $e) {
				throw new \Exception("Error Processing Request".$e->getMessage());
			}
		}

		return $this->render('HospitalBundle:FormasPago:editar.html.twig',array(
			'formasPago'=>$formasPago,
			'form'=>$form->createView())
		);
	}

	public function eliminarAction($id){
		try {
			$repository = $this->getDoctrine()->getRepository("HospitalBundle:FormaDePago");
			$formasPago = $repository->find($id);
			$this->getDoctrine()->getManager()->remove($formasPago);
			$this->getDoctrine()->getManager()->flush();
			return $this->redirectToRoute('hospital_formas_pago');
		} catch (\Exception $e) {
			throw new \Exception("Error Processing Request".$e->getMessage());			
		}
	}
}