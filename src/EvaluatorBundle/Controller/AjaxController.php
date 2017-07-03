<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use EvaluatorBundle\Entity\Mark;

class AjaxController extends Controller{
	/**
	 *
	 * @var Mark
	 */
	private $mark;
	
	public function updateMarkAction(Request $request){
		if($request->isXmlHttpRequest()){
			$idMark = $request->query->get("idMark");
			$grade = $request->query->get("grade");
			$em = $this->getDoctrine()->getManager();
//			$mark = $em->getRepository("EvaluatorBundle:Mark")->find($idMark);
			$this->mark = $em->getRepository(Mark::class)->find($idMark);
			
			if (!$this->mark) {
				throw $this->createNotFoundException(
					'No mark found for id '.$idMark
				);
			}
			
			$this->mark->setGrade($grade);
			$em->persist($this->mark);
		    $em->flush();
			
			//$this->mark->getIdStudent()->recalculateFinalMark();
			
			$em->getRepository(Student::class)->recalculateFinalMark($this->mark->getIdStudent(), $this->mark->getIdCourse());
		}
		
		
		die();
	}
	
}


//TODO filtrar para que no pase de 10 la nota, no se donde se hará