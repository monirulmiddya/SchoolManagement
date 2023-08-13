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

class Student extends CI_Controller
{
  private $ud = [];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('student_model');
    $this->load->model('student_class_model');
    $this->ud = has_loggedIn();
  }

  private function view($id = null)
  {
    if ($student = $this->student_model->get($id)) {
      $class = $this->student_class_model->get_all();
      view('student/edit', compact("student","class"), "Portal | Student Edit");
    } else {
      $classes = $this->student_class_model->get_all();
      view('student/create', compact("classes"), "Portal | Student Create");
    }
  }

  public function index()
  {
    $students = $this->student_model->get_all();
    view('student/index', compact("students"), "Portal | Student");
  }

  public function save($id = null)
  {
    try {

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $this->form_validation->set_rules("name", "Name", "trim|required");
        $this->form_validation->set_rules("email", "Email", "trim|required");
        $this->form_validation->set_rules("mobile", "Mobile", "trim|required");
        $this->form_validation->set_rules("dob", "DOB", "trim|required");
        $this->form_validation->set_rules("gender", "Gender", "trim|required");
        $this->form_validation->set_rules("address", "Address", "trim|required");
        $this->form_validation->set_rules("class_id", "Classes", "trim|required");


        if ($this->form_validation->run() == true) {
          $data = [
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "mobile" => $this->input->post("mobile"),
            "dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
            "gender" => $this->input->post("gender"),
            "class_id" => $this->input->post("class_id"),
            "address" => $this->input->post("address"),
          ];


          if ($id) {
            if ($this->student_model->update($id, $data)) {
              alert("success", "Student updated Successfully");
            } else {
              alert("warning", "Student details no Changes");
            }
          } else {
            if ($this->student_model->insert($data)) {
              alert("success", "Student created successfully");
            } else {
              alert("danger", "Student create failed");
            }
          }

          redirect(base_url("student"));
        } else {
          $this->view($id);
        }
      } else {
        $this->view($id);
      }
    } catch (\Throwable $th) {
      redirect(base_url("student"));
    }
  }

  public function delete($id = null)
  {
    try {
      if ($this->student_model->get($id)) {
        if ($this->student_model->delete($id)) {
          alert("success", "Student deleted successfully");
        } else {
          alert("danger", "Student delete failed");
        }
        redirect(base_url("student"));
      } else {
        alert("danger", "Student not available");
      }
    } catch (\Throwable $th) {
      redirect(base_url("student"));
    }
  }

  public function get($id)
  {
    try {
      if ($resp = $this->student_model->get($id)) {
        echo jresp(true, "Data fetched", $resp);
      } else {
        echo jresp(false, "Data not available");
      }
    } catch (\Throwable $th) {
      echo jresp(false, "Internal server error");
    }
  }
}


/* End of file Student.php */
/* Location: ./application/controllers/Student.php */