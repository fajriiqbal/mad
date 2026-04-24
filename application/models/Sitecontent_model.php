<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitecontent_model extends CI_Model {

	private $baseDir;
	private $tableExists = false;

	public function __construct()
	{
		parent::__construct();
		$this->baseDir = APPPATH . 'cache/sitecontent/';
		$this->tableExists = $this->db->table_exists('site_contents');
	}

	private function ensureDir()
	{
		if (!is_dir($this->baseDir)) {
			mkdir($this->baseDir, 0775, true);
		}
	}

	private function path($key)
	{
		return $this->baseDir . $key . '.ser';
	}

	public function get($key, array $defaults = [])
	{
		if ($this->tableExists) {
			$row = $this->db->get_where('site_contents', ['content_key' => $key])->row();
			if (!$row || empty($row->content_value)) {
				return (object) $defaults;
			}

			$content = @unserialize($row->content_value);
			if (!is_array($content)) {
				$content = [];
			}

			return (object) array_merge($defaults, $content);
		}

		$this->ensureDir();
		$path = $this->path($key);

		if (!file_exists($path)) {
			return (object) $defaults;
		}

		$content = @unserialize(file_get_contents($path));
		if (!is_array($content)) {
			$content = [];
		}

		return (object) array_merge($defaults, $content);
	}

	public function save($key, array $data)
	{
		if ($this->tableExists) {
			return (bool) $this->db->replace('site_contents', [
				'content_key' => $key,
				'content_value' => serialize($data),
				'updated_at' => date('Y-m-d H:i:s')
			]);
		}

		$this->ensureDir();
		$path = $this->path($key);
		return (bool) file_put_contents($path, serialize($data), LOCK_EX);
	}

}

/* End of file Sitecontent_model.php */
