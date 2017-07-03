<?php
namespace EvaluatorBundle\Repository;

use Doctrine\ORM\EntityRepository;

use EvaluatorBundle\Entity\Student;
use EvaluatorBundle\Entity\Mark;

class StudentRepository extends EntityRepository{
	
	public function recalculateFinalMark(Student $idStudent, Course $idCourse){
		$em = $this->getEntityManager();
		$marks = $em->getRepository(Mark::class)->findByIdStudent($idStudent);
				
		if (!$marks) {
			throw $this->createNotFoundException(
				'No marks found for id '.$idStudent
			);
		}
		
		$final_grade = 0;
		foreach($marks as $mark) {
			if ($mark->getIdPartial()->getName() !== 'final') {
				$final_grade += $mark->getGradeForFinal();
			} else {
				$final_mark = $mark;
			}
		}
		
		//$markToFinal = $marks->getIdPartial()->getName() == 'final';
		$final_mark->setGrade($final_grade);
		
		$em->persist($final_mark);
		$em->flush();
	}
}
