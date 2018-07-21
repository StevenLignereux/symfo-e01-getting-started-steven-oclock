<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Model\StudentModel;

class ClassRoomController extends Controller
{
    /**
     * Affiche la liste des étudiants
     */
    public function listAction()
    {
      $students = StudentModel::getStudents();
      return $this->render('classroom/students.html.twig', [
        'students' => $students,
      ]);
    }

    /**
     * Affiche un étudiant
     */
    public function showAction($id)
    {
      $student = StudentModel::getStudentById($id);

      // Etudiant non trouvé
      if (false === $student) {
        throw $this->createNotFoundException('Etudiant non trouvé');

      }

      return $this->render('classroom/student.html.twig', [
        'student' => $student,
      ]);
    }
}
