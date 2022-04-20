<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenjang_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('jenjang')->result();
    }

    public function get_row($id)
    {
        $this->db->where('mahasiswa.id_prodi', $id);
        $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        $this->db->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi', 'left');
        $this->db->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang', 'left');
        return   $this->db->get('mahasiswa');
    }
}

/* End of file Jenjang_model.php */
/* Location: ./application/models/Jenjang_model.php */
