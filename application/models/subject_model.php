<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Student_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Najibul Middya
 * @param     ...
 * @return    ...
 *
 */

class subject_model extends CI_Model
{

    // ------------------------------------------------------------------------

    private $table = "subject";

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------

    function subjectList()
    {
        $hasil = $this->db->get($this->table);
        return $hasil->result();
    }

    function saveSub()
    {
        $data = array(
            'name'             => $this->input->post('name'),
        );
        $result = $this->db->insert($this->table, $data);
        return $result;
    }

    function updateSub()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->set('name', $name);
        $this->db->where('id', $id);
        $result = $this->db->update($this->table);
        return $result;
    }

    function deleteSub()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $result = $this->db->delete($this->table);
        return $result;
    }

    // ------------------------------------------------------------------------




}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */




