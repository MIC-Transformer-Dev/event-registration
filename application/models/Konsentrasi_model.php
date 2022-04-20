<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsentrasi_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('konsentrasi')->result();
    }

    public function get_row($id)
    {
        $this->db->where('mahasiswa.id_konsentrasi', $id);
        $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        $this->db->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi', 'left');
        $this->db->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang', 'left');
        return   $this->db->get('mahasiswa');
    }
}

/* End of file Konsentrasi_model.php */
/* Location: ./application/models/Konsentrasi_model.php */
