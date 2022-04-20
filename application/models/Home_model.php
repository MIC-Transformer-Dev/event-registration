<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function total($table)
    {
        return $this->db->get($table)->num_rows();
    }
}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */
