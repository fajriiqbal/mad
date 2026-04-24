<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tatatertib extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sitecontent_model', 'sitecontent');
	}

	public function index()
	{
		$data['title']		= 'Tata Tertib';
		$data['page']		= 'tatatertib/index';
		$data['tata']		= $this->sitecontent->get('tatatertib', [
			'photo' => 'tata-tertib.png'
		]);

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
