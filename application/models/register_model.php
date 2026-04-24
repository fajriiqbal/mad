<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat database
    }

    public function insert_data($data) {
        return $this->db->insert('data_diri', $data); // Ganti 'data_diri' dengan nama tabel Anda
    }
}