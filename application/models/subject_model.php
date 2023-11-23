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
<<<<<<< HEAD
    private $class_table = "class";
=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------

<<<<<<< HEAD
    function subjectList($cid)
    {
        $this->db->select("s.*,c.class,");
        $this->db->from("{$this->table} s");
        $this->db->join("{$this->class_table} c", "c.id = s.class");
        $this->db->where('s.class', $cid);
        return $hasil=$this->db->get()->result();
        
        // $hasil = $this->db->get($this->table);
        // return $hasil->result();
=======
    function subjectList()
    {
        $hasil = $this->db->get($this->table);
        return $hasil->result();
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
    }

    function saveSub()
    {
        $data = array(
            'name'             => $this->input->post('name'),
<<<<<<< HEAD
            'class'             => $this->input->post('class'),
=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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

<<<<<<< HEAD
    function get_class($id){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where("class", $id);
        return $this->db->get()->result();
    }

=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
    // ------------------------------------------------------------------------




}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */




