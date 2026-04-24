<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('menu_model', 'menu');
        $this->load->model('Guru_model','guru');
      
    }

    public function index()
    {
        $data['title']		= 'Daftar guru';
        $data['guru'] = $this->guru->getAllGuru();
        $data['page']		= 'dataguru/index';
        
        

        $this->load->view('back/layouts/main', $data);
    }

    public function detail($id)
    {
        $data['title']		= 'Detail Guru';
        $data['guru']		= $this->guru->getData($id);
        $data['page']		= 'dataguru/detail';
        

        $this->load->view('back/layouts/main', $data);
    }
    public function add()
    {
        if (!$_POST) {
            $input = (object) $this->guru->getDefaultValues(); // Ganti dengan fungsi yang sesuai
        } else {
            $input = (object) $this->input->post(null, true);
        }
    
        // Validasi form
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
    
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Guru';
            $data['input'] = $input;
            $data['page'] = 'dataguru/form'; // Ganti dengan view yang sesuai
            $data['form_action'] = base_url("dataguru/add");
    
            $this->load->view('back/layouts/main', $data);
        } else {
            // Ambil data dari form
            $data = [
                'id_guru' => $this->input->post('id_guru', true), // Ambil ID Guru
                'Nama_g' => $this->input->post('Nama_g', true),
                'Mapel_g' => $this->input->post('Mapel_g', true),
            ];
    
            // Proses upload foto
            if (!empty($_FILES['photo']['name'])) {
                $upload = $this->uploadImage(); // Panggil fungsi upload
                if ($upload['status']) {
                    $data['photo_g'] = $upload['file_name']; // Simpan nama file yang diupload
                } else {
                    $this->session->set_flashdata('image_error', $upload['error']);
                    redirect(base_url('dataguru/add'));
                    return; // Pastikan untuk menghentikan eksekusi lebih lanjut
                }
            }
    
            // Insert data ke database
            $this->guru->insert($data);
            $this->session->set_flashdata('success', 'Data Guru Berhasil Ditambahkan.');
            redirect(base_url('dataguru'));
        }
    }
    
    // Fungsi untuk mengupload gambar
    private function uploadImage()
    {
        $config['upload_path'] = './img/identitas/'; // Pastikan folder ini ada dan memiliki izin yang benar
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 3072; // 3 MB
        $config['file_name'] = time() . '_' . $_FILES['photo']['name']; // Menghindari nama file yang sama
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('photo')) {
            return [
                'status' => false,
                'error' => $this->upload->display_errors()
            ];
        } else {
            return [
                'status' => true,
                'file_name' => $this->upload->data('file_name')
            ];
        }
    }
    
//     public function add()
// {
//     if (!$_POST) {
//         $input = (object) $this->guru->getDefaultValues();
//     } else {
//         $input = (object) $this->input->post(null, true);
//     }

//     $this->form_validation->set_rules('Nama_g', 'Nama', 'required',[
//         'required' => 'Nama Guru tidak boleh kosong!'
//     ]
//     );
//     $this->form_validation->set_rules('Mapel_g', 'Mapel', 'required',[
//         'required' => 'Mapel tidak boleh kosong!'
//     ]
//     );
//     $this->form_validation->set_rules('photo', 'Foto', 'callback_file_check'); // Validasi file

//     if ($this->form_validation->run() == false) {
//         $data['title'] = 'Tambah Guru';
//         $data['input'] = $input;
//         $data['page'] = 'dataguru/form';
//         $data['form_action'] = base_url("dataguru/add");

//         $this->load->view('back/layouts/main', $data);
//         return;
//     } else {
//         // Proses upload foto
//         $config['upload_path'] = './img/identitas/';
//         $config['allowed_types'] = 'jpg|jpeg|png';
//         $config['max_size'] = 3072; // 3 MB
//         $config['file_name'] = time() . '_' . $_FILES['photo']['name']; // Menghindari nama file yang sama

//         $this->load->library('upload', $config);

//         if (!$this->upload->do_upload('photo')) {
//             // Jika upload gagal
//             $this->session->set_flashdata('image_error', $this->upload->display_errors());
//             $this->session->set_flashdata('input', $input); // Simpan inputan
//             redirect(base_url('dataguru/add'));
//         } else {
//             // Jika upload berhasil
//             $upload_data = $this->upload->data();
//             $data = [
//                 'Nama_g' => $this->input->post('Nama_g', true),
//                 'Mapel_g' => $this->input->post('Mapel_g', true),
//                 'photo_g' => $upload_data['file_name'], // Simpan nama file yang diupload
//             ];

//             log_message('debug', 'Data yang akan dimasukkan: ' . print_r($data, true));

//             if ($this->guru->insert($data)) {
//                 $this->session->set_flashdata('success', 'Data Guru Berhasil Ditambahkan.');
//                 redirect(base_url('dataguru'));
//             } else {
//                 $this->session->set_flashdata('error', 'Data Guru Gagal Ditambahkan.');
//                 redirect(base_url('dataguru/add'));
//             }  

//             redirect(base_url('dataguru'));
//         }
//     }
// }

// Callback untuk validasi file
// public function file_check($str)
// {
//     $allowed_mime_type_arr = ['image/jpeg', 'image/jpg', 'image/png'];
//     $mime = get_mime_by_extension($_FILES['photo']['name']);
//     if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
//         if (in_array($mime, $allowed_mime_type_arr)) {
//             return true;
//         } else {
//             $this->form_validation->set_message('file_check', 'Please select only jpg/png file.');
//             return false;
//         }
//     } else {
//         $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
//         return false;
//     }
// }
    public function edit($id)
    {
        if(!$_POST){
            $input = (object) $this->guru->getData($id);
        } else {
            $input = (object) $this->input->post(null, true);
        }

        $this->form_validation->set_rules('Nama_g', 'Nama', 'required');
        $this->form_validation->set_rules('Mapel_g', 'Mapel', 'required');
        $this->form_validation->set_rules('photo_g', 'Foto', 'required');

        if($this->form_validation->run() == false){
            $data['title']		= 'Ubah Guru';
            $data['input']		= $input;
            $data['page']		= 'dataguru/form';
            $data['form_action'] = base_url("dataguru/edit/$id");

            $this->load->view('back/layouts/main', $data);
            return;
        }else{
            $data = [
                'Nama_g'	=> $this->input->post('Nama_g', true),
                'Mapel_g'	=> $this->input->post('Mapel_g', true),
                'photo_g'	=> $this->input->post('photo_g', true),
            ];

            $this->guru->update($id, $data);
            $this->form_validation->set_rules('Nama_g', 'Nama Guru', 'required');
        $this->form_validation->set_rules('Mapel_g', 'Mapel', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan error
            $data['title'] = 'Edit Guru';
            $data['form_action'] = base_url("guru/update/$id");
            $data['input'] = (object) [
                'id' => $id,
                'Nama_g' => $this->input->post('Nama_g'),
                'Mapel_g' => $this->input->post('Mapel_g'),
                'photo' => ''
            ];
            $this->load->view('guru_form', $data);
        } else {
            // Proses upload foto jika ada
            $config['upload_path'] = './img/identitas/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 3072; // 3 MB
            print_r($input);
        }
        $this->guru->update($id, $data);
            $this->session->set_flashdata('success', 'Data Guru Berhasil Diubah.');

            redirect(base_url('dataguru'));
        }
    }

}
