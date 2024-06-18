<?php

class Dokumenguru_model extends CI_Model
{
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_all_dokumen()
    {
        return $this->db->get('dokumen_guru')->result();
    }

    public function insert_dokumen($data)
    {
        return $this->db->insert('dokumen_guru', $data);
    }

    public function get_dokumen_by_id($id)
    {
        return $this->db->get_where('dokumen_guru', ['id' => $id])->row();
    }

    public function update_dokumen($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('dokumen_guru', $data);
    }



    public function delete_dokumen($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('dokumen_guru');
    }
}
