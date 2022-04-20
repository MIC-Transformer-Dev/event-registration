<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar_model extends CI_Model
{

    public function get_data()
    {

        $this->db->join('tiket', 'tiket.id_seminar = seminar.id_seminar', 'left');
        return $this->db->get('seminar')->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert('seminar', $data);
    }

    public function get_row($id)
    {
        $this->db->join('tiket', 'tiket.id_seminar = seminar.id_seminar', 'left');
        $this->db->join('pembicara', 'pembicara.id_seminar = seminar.id_seminar', 'left');
        $this->db->join('sponsor', 'sponsor.id_seminar = seminar.id_seminar', 'left');
        $this->db->where('seminar.id_seminar', $id);
        return $this->db->get('seminar');
    }

    public function get_sm_row($id)
    {
        $this->db->where('seminar.id_seminar', $id);
        return $this->db->get('seminar');
    }

    function update_data($id, $data)
    {
        $this->db->where('id_seminar', $id);
        return $this->db->update('seminar', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_seminar', $id);
        return $this->db->delete('seminar');
    }

    public function get_pembicara($id)
    {
        $this->db->where('id_seminar', $id);
        return $this->db->get('pembicara')->result();
    }

    function total_tiket($id)
    {
        return $this->db->where('id_seminar', $id)->get('tiket');
    }

    public function tiket_terjual($id)
    {
        return $this->db->where('id_seminar', $id)->get('pendaftaran_seminar')->num_rows();
    }

    public function get_sponsor($id)
    {
        $this->db->where('id_seminar', $id);
        return $this->db->get('sponsor')->result();
    }
}

/* End of file Seminar_model.php */
/* Location: ./application/models/Seminar_model.php */
