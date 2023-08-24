<?php
defined ('BASEPATH') or exit('No direct script access allowed');


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
  
class Demo extends CI_Controller
{
  private $ud = [];
  public function __construct()
  {
    parent::__construct();
    $this->load->model('demo_model');
  }

  public function index(){
    $data=$this->demo_model->get_all();
    pp($data);
  }

}


/* End of file Student.php */
/* Location: ./application/controllers/Student.php */