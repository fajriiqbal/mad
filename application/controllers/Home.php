<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('banner_model', 'banner');
		$this->load->model('identitas_model', 'identitas');
		$this->load->model('sambutan_model', 'sambutan');
		$this->load->model('berita_model', 'berita');
		$this->load->model('background_model', 'background');
		$this->load->model('Guru_model','guru');
		$this->load->helper('bc_helper');
	}
	
	public function index()
	{
		$data['title']		= 'Beranda';
		$data['brand']		= $this->identitas->getData();
		$data['banners'] 	= $this->banner->getBanner();
		$data['sambutan'] = $this->sambutan->getData();
		$data['berita']	= $this->berita->getLastNews();
		$data['jurusan']	= $this->background->getData();
		$data['guru'] = $this->guru->getAllGuru();
		$data['page']		= 'home/index';
		$data['breadcrumb'] = breadcrumb([
            ['title' => 'Beranda', 'url' => base_url('home')]
        ]);

		$this->load->view('front/layouts/main', $data);
	}
	public function ekstra()
	{
		$data['title']		= 'Ekstrakurikuler';
		$data['page']		= 'home/ekstra';
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Ekstrakurikuler', 'url' => base_url('home/ekstra')]
		]);

		$this->load->view('front/layouts/main', $data);
	}
	public function guru()
	{
		$data['title']		= 'Guru';
		$data['page']		= 'home/guru';
		$data['breadcrumb'] = breadcrumb([
			['title' => 'Beranda', 'url' => base_url('home')],
			['title' => 'Guru', 'url' => base_url('home/guru')]
		]);
		$data['guru'] = $this->guru->getAllGuru();

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
