<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumenguru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Dokumenguru_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['position'] = 'DokumenGuru';
        $data['admin'] = $this->Dokumenguru_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['dokumen_guru'] = $this->Dokumenguru_model->get_all_dokumen();
        $this->load->view('template/header', $data);
        $this->load->view('dokumenguru/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['position'] = 'TambahDokumenGuru';
        $data['admin'] = $this->Dokumenguru_model->admin_Active();
        $this->load->view('template/header', $data);
        $this->load->view('dokumenguru/tambah', $data);
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $config['upload_path'] = './gambar2/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        $data = [
            'nama_guru' => $this->input->post('nama_guru'),
            'nip' => $this->input->post('nip'),
            'syarat_bukti_modul' => $this->_do_upload('syarat_bukti_modul'),
            'syarat_bukti_rpp' => $this->_do_upload('syarat_bukti_rpp'),
            'syarat_bukti_silabus' => $this->_do_upload('syarat_bukti_silabus'),
            'syarat_bukti_atp' => $this->_do_upload('syarat_bukti_atp')
        ];

        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data['position'] = 'TambahDokumenGuru';
            $data['admin'] = $this->session->userdata();
            $this->load->view('template/header', $data);
            $this->load->view('dokumenguru/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Dokumenguru_model->insert_dokumen($data);
            $this->session->set_flashdata('done', 'Dokumen guru berhasil ditambahkan!');
            redirect('dokumenguru');
        }
    }

    public function ubah($id)
    {
        $data['position'] = 'UbahDokumenGuru';
        $data['admin'] = $this->Dokumenguru_model->admin_Active();
        $data['dokumen'] = $this->Dokumenguru_model->get_dokumen_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('dokumenguru/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->Dokumenguru_model->delete_dokumen($id);
        $this->session->set_flashdata('done', 'Data berhasil dihapus');
        redirect('dokumenguru');
    }

    public function update($id)
    {
        $config['upload_path'] = './gambar2/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        $data = [
            'nama_guru' => $this->input->post('nama_guru'),
            'nip' => $this->input->post('nip')
        ];

        if (!empty($_FILES['syarat_bukti_modul']['name'])) {
            $data['syarat_bukti_modul'] = $this->_do_upload('syarat_bukti_modul');
        }

        if (!empty($_FILES['syarat_bukti_rpp']['name'])) {
            $data['syarat_bukti_rpp'] = $this->_do_upload('syarat_bukti_rpp');
        }

        if (!empty($_FILES['syarat_bukti_silabus']['name'])) {
            $data['syarat_bukti_silabus'] = $this->_do_upload('syarat_bukti_silabus');
        }

        if (!empty($_FILES['syarat_bukti_atp']['name'])) {
            $data['syarat_bukti_atp'] = $this->_do_upload('syarat_bukti_atp');
        }

        $this->Dokumenguru_model->update_dokumen($id, $data);
        $this->session->set_flashdata('done', 'Dokumen guru berhasil diupdate!');
        redirect('dokumenguru');
    }

    private function _do_upload($field_name)
    {
        if (!$this->upload->do_upload($field_name)) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            return null;
        } else {
            return $this->upload->data('file_name');
        }
    }
}
