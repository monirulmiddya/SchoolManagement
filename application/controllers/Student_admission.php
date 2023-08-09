<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller Student
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Najibul Middya
 * @param     ...
 * @return    ...
 *
 */

class Student_admission extends CI_Controller
{
  private $ud = [];
  public function __construct()
  {
    parent::__construct();
    $this->load->model('student_model');
    $this->load->model(['student_class_model', 'student_class_model', 'admission_model']);
    $this->ud = has_loggedIn();
  }

  public function save()
  {
    $students = $this->student_model->get_all();
    $classes = $this->student_class_model->get_all();
    view('admission/create', compact("students", "classes"), "Portal | Admission Create");
  }
}




/* End of file Student.php */
/* Location: ./application/controllers/Student.php */