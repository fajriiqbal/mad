<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tatatertibmanage extends CI_Controller {

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
			'photo' => 'tata-tertib.png'
		];
	}

	public function index()
	{
		$data['title'] = 'Tata Tertib';
		$data['page'] = 'tatatertib/index';
		$data['content'] = $this->sitecontent->get('tatatertib', $this->defaults());
		$this->load->view('back/layouts/main', $data);
	}

	public function edit()
	{
		$content = $this->sitecontent->get('tatatertib', $this->defaults());

		if ($this->input->method() !== 'post') {
			$data['title'] = 'Ubah Tata Tertib';
			$data['page'] = 'tatatertib/form';
			$data['content'] = $content;
			$data['form_action'] = base_url('tatatertibmanage/edit');
			$this->load->view('back/layouts/main', $data);
			return;
		}

		if (!empty($_FILES['photo']['name'])) {
			$config = [
				'upload_path' => './img/tatatertib',
				'allowed_types' => 'jpg|jpeg|png|webp',
				'overwrite' => false,
				'encrypt_name' => true,
				'max_size' => 3072
			];

			if (!is_dir(FCPATH . 'img/tatatertib')) {
				mkdir(FCPATH . 'img/tatatertib', 0775, true);
			}

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('photo')) {
				$upload = $this->upload->data('file_name');
				if (!empty($content->photo) && file_exists(FCPATH . 'img/tatatertib/' . $content->photo)) {
					@unlink(FCPATH . 'img/tatatertib/' . $content->photo);
				}
				$content->photo = $upload;
				$this->sitecontent->save('tatatertib', ['photo' => $content->photo]);
				$this->session->set_flashdata('success', 'Tata tertib berhasil diperbarui.');
				redirect(base_url('tatatertibmanage'));
				return;
			}

			$this->session->set_flashdata('image_error', strip_tags($this->upload->display_errors()));
			redirect(base_url('tatatertibmanage/edit'));
			return;
		}

		$this->session->set_flashdata('success', 'Tidak ada perubahan pada tata tertib.');
		redirect(base_url('tatatertibmanage'));
	}

}

/* End of file Tatatertibmanage.php */
