<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Yeers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("yeers_model");
        $this->ud = has_loggedIn();
    }

    private function view($id = null)
    {
        if ($yeers = $this->yeers_model->get($id)) {
            view('student_yeers/edit', compact("yeers"), "Portal | Yeers Edit");
        } else {
            view('student_yeers/create', [], "Portal | Yeers Create");
        }
    }
    public function index()
    {
        $yeers = $this->yeers_model->get_all();
        view('student_yeers/index', compact("yeers"), "Portal | Yeers");
    }

    public function save($id=null)
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $this->form_validation->set_rules("name", "Name", "trim|required");

                if ($this->form_validation->run() == true) {
                    $data = [
                        "name" => $this->input->post("name"),
                    ];

                    if ($id) {
                        if ($this->yeers_model->update($id, $data)) {
                            alert("success", "Yeers updated Successfully");
                        } else {
                            alert("warning", "Yeers details no Changes");
                        }
                    } else {
                        if ($this->yeers_model->insert($data)) {
                            alert("success", "Yeers created successfully");
                        } else {
                            alert("danger", "Yeers create failed");
                        }
                    }

                    redirect(base_url("yeers"));
                } else {
                    $this->view($id);
                }
            } else {
                $this->view($id);
            }
        } catch (\Throwable $th) {
            redirect(base_url("yeers"));
        }
    }

    
}
