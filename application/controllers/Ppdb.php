<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function form()
	{
		$data['title']		= 'Form';
		$data['page']		= 'ppdb/form';
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Form', 'url' => base_url('ppdb/form')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

	public function inforpmb()
	{
		$data['title']		= 'Informasi';
		$data['page']		= 'ppdb/inforpmb';
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Informasi', 'url' => base_url('ppdb/inforpmb')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

	public function hasilpmb()
	{
		$data['title']		= 'Hasil';
		$data['page']		= 'ppdb/hasilpmb';
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Hasil', 'url' => base_url('ppdb/hasilpmb')]
			
		]);

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
