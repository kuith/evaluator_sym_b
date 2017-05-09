<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AjaxController extends Controller{

	public function updateMarkAction(Request $request){
		if($request->isXmlHttpRequest()){
			$idMark = $request->query->get("idMark");
			$grade = $request->query->get("grade");
			$em = $this->getDoctrine()->getManager();
			$mark = $em->getRepository("EvaluatorBundle:Mark")->find($idMark);
			
			if (!$mark) {
				throw $this->createNotFoundException(
					'No mark found for id '.$idMark
				);
			}
			
			$mark -> setGrade($grade);
		    $em->flush();
		}
		
		die();
	}
	

	public function updateFinalAction(){
		
	}
}
