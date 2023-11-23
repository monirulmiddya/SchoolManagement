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
<<<<<<< HEAD
        $this->load->model("student_class_model");
=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
        $this->ud = has_loggedIn();
    }


    public function index()
    {
<<<<<<< HEAD
        $classes = $this->student_class_model->get_all();
        view('subject/index', compact('classes'), "Portal | Subject");
=======
        view('subject/index', "Portal | Subject");
        
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
    }

    function show()
    {
<<<<<<< HEAD
        $class_id = $this->input->get("class_id");
        
        if ($data = $this->subject_model->subjectList($class_id)) {
            echo jresp(true, "Success", $data);
            exit;
        } else {
            echo jresp(false, "data get failed");
            exit;
        }
    }

    function class_get()
    {
        $data = $this->student_class_model->get_all();
        echo json_encode($data);
=======
        if($data = $this->subject_model->subjectList()){
            echo json_encode($data);
        }else{
            alert("danger", "data get failed");
        }
       
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
