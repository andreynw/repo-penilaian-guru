<?php

class kriteria_Model extends CI_Model
{
    // Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }

    public function get_ById($id)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id])->row_array();
    }

    public function edit($id)
    {
        $data = [
            'nama_kriteria' => htmlspecialchars($this->input->post('kriteria', true)),
            'jenis' => $this->input->post('jenis'),
            'bobot' => $this->input->post('bobot'),
            'info' => htmlspecialchars($this->input->post('info', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'indikator1' => htmlspecialchars($this->input->post('indikator1', true)),
            'indikator2' => htmlspecialchars($this->input->post('indikator2', true)),
            'indikator3' => htmlspecialchars($this->input->post('indikator3', true)),
            'indikator4' => htmlspecialchars($this->input->post('indikator4', true)),
            'indikator5' => htmlspecialchars($this->input->post('indikator5', true)),
        ];
        $this->db->where('id_kriteria', $id);
        $this->db->update('kriteria', $data);
    }
}
