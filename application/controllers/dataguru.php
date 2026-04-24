<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('menu_model', 'menu');
        $this->load->model('Guru_model', 'guru');
    }

    public function index()
    {
        $data['title'] = 'Daftar Guru';
        $data['guru'] = $this->guru->getAllGuru();
        $data['page'] = 'dataguru/index';

        $this->load->view('back/layouts/main', $data);
    }

    public function detail($id)
    {
        $guru = $this->guru->getData($id);

        if(!$guru){
            redirect(base_url('dataguru'));
            return;
        }

        $data['title'] = 'Detail Guru';
        $data['guru'] = $guru;
        $data['page'] = 'dataguru/detail';

        $this->load->view('back/layouts/main', $data);
    }

    public function add()
    {
        $input = !$_POST ? (object) $this->guru->getDefaultValues() : (object) $this->input->post(null, true);

        $this->form_validation->set_rules('id_guru', 'ID Guru', 'required|is_unique[guru.id_guru]', [
            'required' => 'ID Guru tidak boleh kosong!',
            'is_unique' => 'ID Guru sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('Nama_g', 'Nama', 'required', [
            'required' => 'Nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('Mapel_g', 'Mapel', 'required', [
            'required' => 'Mapel tidak boleh kosong!'
        ]);

        if($this->form_validation->run() == false){
            $data['title'] = 'Tambah Guru';
            $data['input'] = $input;
            $data['page'] = 'dataguru/form';
            $data['form_action'] = base_url('dataguru/add');

            $this->load->view('back/layouts/main', $data);
            return;
        }

        $data = [
            'id_guru' => $this->input->post('id_guru', true),
            'Nama_g'  => $this->input->post('Nama_g', true),
            'Mapel_g' => $this->input->post('Mapel_g', true),
        ];

        if(!empty($_FILES['photo']['name'])){
            $imageName = url_title($data['Nama_g'], '-', true) . '-' . date('YmdHis');
            $upload = $this->guru->uploadImage($imageName);

            if(!$upload){
                redirect(base_url('dataguru/add'));
                return;
            }

            $data['photo_g'] = $upload;
        }

        $this->guru->insert($data);
        $this->session->set_flashdata('success', 'Data Guru Berhasil Ditambahkan.');
        redirect(base_url('dataguru'));
    }

    public function edit($id)
    {
        $guru = $this->guru->getData($id);

        if(!$guru){
            redirect(base_url('dataguru'));
            return;
        }

        $input = !$_POST ? $guru : (object) $this->input->post(null, true);

        $this->form_validation->set_rules('id_guru', 'ID Guru', 'required', [
            'required' => 'ID Guru tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('Nama_g', 'Nama', 'required', [
            'required' => 'Nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('Mapel_g', 'Mapel', 'required', [
            'required' => 'Mapel tidak boleh kosong!'
        ]);

        if($this->form_validation->run() == false){
            $data['title'] = 'Ubah Guru';
            $data['input'] = $input;
            $data['page'] = 'dataguru/form';
            $data['form_action'] = base_url('dataguru/edit/' . $id);

            $this->load->view('back/layouts/main', $data);
            return;
        }

        $data = [
            'id_guru' => $this->input->post('id_guru', true),
            'Nama_g'  => $this->input->post('Nama_g', true),
            'Mapel_g' => $this->input->post('Mapel_g', true),
            'photo_g' => $guru->photo_g,
        ];

        if(!empty($_FILES['photo']['name'])){
            $imageName = url_title($data['Nama_g'], '-', true) . '-' . date('YmdHis');
            $upload = $this->guru->uploadImage($imageName);

            if(!$upload){
                redirect(base_url('dataguru/edit/' . $id));
                return;
            }

            if(!empty($guru->photo_g) && file_exists('./img/identitas/' . $guru->photo_g)){
                unlink('./img/identitas/' . $guru->photo_g);
            }

            $data['photo_g'] = $upload;
        }

        $this->guru->update($id, $data);
        $this->session->set_flashdata('success', 'Data Guru Berhasil Diubah.');
        redirect(base_url('dataguru'));
    }

}
