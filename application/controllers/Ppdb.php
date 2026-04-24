<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sitecontent_model', 'sitecontent');
	}

	public function form()
	{
		$data['title']		= 'Form Pendaftaran';
		$data['page']		= 'ppdb/form';
		$data['ppdb']		= $this->sitecontent->get('ppdb', [
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
		]);
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Form Pendaftaran', 'url' => base_url('ppdb/form')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

	public function inforpmb()
	{
		$data['title']		= 'Informasi PPDB';
		$data['page']		= 'ppdb/inforpmb';
		$data['ppdb']		= $this->sitecontent->get('ppdb', [
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
		]);
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Informasi PPDB', 'url' => base_url('ppdb/inforpmb')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

	public function hasilpmb()
	{
		$data['title']		= 'Hasil PPDB';
		$data['page']		= 'ppdb/hasilpmb';
		$data['ppdb']		= $this->sitecontent->get('ppdb', [
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
		]);
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Hasil PPDB', 'url' => base_url('ppdb/hasilpmb')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
