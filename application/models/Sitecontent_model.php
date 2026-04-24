<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitecontent_model extends CI_Model {

	private $baseDir;

	public function __construct()
	{
		parent::__construct();
		$this->baseDir = APPPATH . 'cache/sitecontent/';
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
		$this->ensureDir();
		$path = $this->path($key);
		return (bool) file_put_contents($path, serialize($data), LOCK_EX);
	}

}

/* End of file Sitecontent_model.php */
