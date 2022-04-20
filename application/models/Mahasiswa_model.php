<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    /**
     * lihat_data.
     *
     * @return	mixed
     */
    function lihat_data()
    {
        $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        $this->db->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi', 'left');
        $this->db->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang', 'left');
        return $this->db->get('mahasiswa')->result();
    }

    /**
     * get_prodi.
     *
     * @return	mixed
     */
    function get_prodi()
    {
        return $this->db->get('prodi')->result();
    }

    /**
     * get_konsentrasi.
     *
     * @return	mixed
     */
    function get_konsentrasi()
    {
        return $this->db->get('konsentrasi')->result();
    }

    /**
     * get_jenjang.
     *
     * @return	mixed
     */
    function get_jenjang()
    {
        return $this->db->get('jenjang')->result();
    }

    function insert_data($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    function get_row($id)
    {
        $this->db->where('id_mahasiswa', $id);
        $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        $this->db->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi', 'left');
        $this->db->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang', 'left');
        return   $this->db->get('mahasiswa');
    }

    function get_nim($id)
    {
        $this->db->where('id_mahasiswa', $id);
        return   $this->db->get('mahasiswa')->row();
    }

    function update_data($id, $data)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->update('mahasiswa', $data);
    }

    function delete_data($id)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->delete('mahasiswa');
    }
}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */
