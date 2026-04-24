<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {

    public function index() {
        $this->load->view('data_diri_view');
    }

    public function submit() {
        // Ambil data dari form
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'dob' => $this->input->post('dob'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email')
        );

        // Simpan data ke database (Anda bisa menyesuaikan ini dengan model Anda)
        // Misalnya, Anda bisa memanggil model untuk menyimpan data
        // $this->load->model('Data_model');
        // $this->Data_model->insert_data($data);

        // Redirect atau tampilkan pesan sukses
        redirect('data_diri/success');
    }

    public function success() {
        echo "Data Anda telah berhasil dikirim!";
    }
}