<?php

namespace EvaluatorBundle\Entity;

/**
 * Mark
 */
class Mark
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $grade;
	
	/**
     * @var float
     */
    private $gradeForFinal;
	
	/**
     * Get gradeForFinal
     *
     * @return float
     */
 
    public function getGradeForFinal()
    {
        return $this->gradeForFinal;
    }

    /**
     * Set gradeForFinal
     *
     * @param float $gradeForFinal
     *
     * @return Mark
     */
    public function setGradeForFinal($gradeForFinal)
    {
        $this->gradeForFinal = $gradeForFinal;

        return $this;
    }
	
    /**
     * @var \EvaluatorBundle\Entity\Course
     */
    private $idCourse;

    /**
     * @var \EvaluatorBundle\Entity\Partial
     */
    private $idPartial;

    /**
     * @var \EvaluatorBundle\Entity\Student
     */
    private $idStudent;

	
	public function __construct() {
		$this->grade = 0;
		$this->gradeForFinal = 0;
	}
	
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grade
     *
     * @param float $grade
     *
     * @return Mark
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;		
		$this->gradeForFinal = $this->grade * $this->getIdPartial()->getWeight() / 100;

        return $this;
    }

    /**
     * Get grade
     *
     * @return float
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set idCourse
     *
     * @param \EvaluatorBundle\Entity\Course $idCourse
     *
     * @return Mark
     */
    public function setIdCourse(\EvaluatorBundle\Entity\Course $idCourse = null)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

    /**
     * Get idCourse
     *
     * @return \EvaluatorBundle\Entity\Course
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }

    /**
     * Set idPartial
     *
     * @param \EvaluatorBundle\Entity\Partial $idPartial
     *
     * @return Mark
     */
    public function setIdPartial(\EvaluatorBundle\Entity\Partial $idPartial = null)
    {
        $this->idPartial = $idPartial;

        return $this;
    }

    /**
     * Get idPartial
     *
     * @return \EvaluatorBundle\Entity\Partial
     */
    public function getIdPartial()
    {
        return $this->idPartial;
    }

    /**
     * Set idStudent
     *
     * @param \EvaluatorBundle\Entity\Student $idStudent
     *
     * @return Mark
     */
    public function setIdStudent(\EvaluatorBundle\Entity\Student $idStudent = null)
    {
        $this->idStudent = $idStudent;

        return $this;
    }

    /**
     * Get idStudent
     *
     * @return \EvaluatorBundle\Entity\Student
     */
    public function getIdStudent()
    {
        return $this->idStudent;
    }
}
