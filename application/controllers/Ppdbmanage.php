<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdbmanage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('menu_model', 'menu');
		$this->load->model('sitecontent_model', 'sitecontent');
	}

	private function defaults()
	{
		return [
			'hero_title' => 'Penerimaan Peserta Didik Baru',
			'hero_text' => 'Informasi pendaftaran disajikan secara resmi, rapi, dan mudah dipahami oleh calon peserta didik maupun orang tua.',
			'form_url' => 'https://docs.google.com/forms/d/e/1FAIpQLScxUnVHKh1OPw1yCaXYvtp7CMwfrX1TFLjE49j6pwfvuk2Mqw/viewform?usp=header',
			'whatsapp_url' => 'https://wa.me/6282241509229?text=Assalamu\'alaikum%2C+saya+mau+tanya+tentang+PPDB',
			'jadwal_text' => 'Pendaftaran dibuka sesuai ketentuan dan pengumuman resmi panitia.',
			'syarat_items' => "Fotokopi Ijazah / SKL\nFotokopi Akte Kelahiran\nFotokopi Kartu Keluarga\nPas Foto 3x4",
			'info_title' => 'Informasi Pendaftaran',
			'info_text' => 'Ringkasan informasi PPDB disajikan secara resmi agar selaras dengan halaman publik lainnya.',
			'result_title' => 'Hasil PPDB',
			'result_text' => 'Terima kasih telah mengikuti proses Penerimaan Peserta Didik Baru.',
			'result_note' => 'Jam layanan: 08.00 - 15.00 WIB',
			'result_image' => '',
		];
	}

	public function index()
	{
		$data['title'] = 'PPDB';
		$data['page'] = 'ppdb/index';
		$data['content'] = $this->sitecontent->get('ppdb', $this->defaults());
		$this->load->view('back/layouts/main', $data);
	}

	public function edit()
	{
		$content = $this->sitecontent->get('ppdb', $this->defaults());

		$this->form_validation->set_rules('hero_title', 'Judul Hero', 'required', [
			'required' => 'Judul hero tidak boleh kosong.'
		]);
		$this->form_validation->set_rules('info_title', 'Judul Informasi', 'required', [
			'required' => 'Judul informasi tidak boleh kosong.'
		]);
		$this->form_validation->set_rules('result_title', 'Judul Hasil', 'required', [
			'required' => 'Judul hasil tidak boleh kosong.'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah PPDB';
			$data['page'] = 'ppdb/form';
			$data['content'] = $content;
			$data['form_action'] = base_url('ppdbmanage/edit');
			$this->load->view('back/layouts/main', $data);
			return;
		}

		$data = [
			'hero_title' => $this->input->post('hero_title', true),
			'hero_text' => $this->input->post('hero_text', true),
			'form_url' => $this->input->post('form_url', true),
			'whatsapp_url' => $this->input->post('whatsapp_url', true),
			'jadwal_text' => $this->input->post('jadwal_text', true),
			'syarat_items' => $this->input->post('syarat_items', false),
			'info_title' => $this->input->post('info_title', true),
			'info_text' => $this->input->post('info_text', true),
			'result_title' => $this->input->post('result_title', true),
			'result_text' => $this->input->post('result_text', true),
			'result_note' => $this->input->post('result_note', true),
			'result_image' => $content->result_image ?? '',
		];

		if (!empty($_FILES['result_image']['name'])) {
			$config = [
				'upload_path' => './img/ppdb',
				'allowed_types' => 'jpg|jpeg|png|webp',
				'overwrite' => false,
				'encrypt_name' => true,
				'max_size' => 3072
			];

			if (!is_dir(FCPATH . 'img/ppdb')) {
				mkdir(FCPATH . 'img/ppdb', 0775, true);
			}

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('result_image')) {
				$upload = $this->upload->data('file_name');
				if (!empty($content->result_image) && file_exists(FCPATH . 'img/ppdb/' . $content->result_image)) {
					@unlink(FCPATH . 'img/ppdb/' . $content->result_image);
				}
				$data['result_image'] = $upload;
			} else {
				$this->session->set_flashdata('image_error', strip_tags($this->upload->display_errors()));
				redirect(base_url('ppdbmanage/edit'));
				return;
			}
		}

		$this->sitecontent->save('ppdb', $data);
		$this->session->set_flashdata('success', 'Pengaturan PPDB berhasil diperbarui.');
		redirect(base_url('ppdbmanage'));
	}

}

/* End of file Ppdbmanage.php */
