<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller subject
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

class Subject extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("subject_model");
        $this->ud = has_loggedIn();
    }


    public function index()
    {
        view('subject/index', "Portal | Subject");
        
    }

    function show()
    {
        if($data = $this->subject_model->subjectList()){
            echo json_encode($data);
        }else{
            alert("danger", "data get failed");
        }
       
    }

    function save()
    {
        $data = $this->subject_model->saveSub();
        echo json_encode($data);
        alert("success", "Subject Successfully Added");
    }

    function update()
    {
        $data = $this->subject_model->updateSub();
        echo json_encode($data);
        alert("success", "Subject Update Successfully");
    }

    function delete()
    {
        $data = $this->subject_model->deleteSub();
        echo json_encode($data);
    }
}
