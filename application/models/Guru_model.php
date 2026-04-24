<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

    public function getDataByid($id)
{
    return $this->db->get_where('guru', ['id' => $id])->row();
}
public function getAllGuru()
{
    return $this->db->get('guru')->result();
}
public function insert($data)
{
    $this->db->insert('guru', $data);
}
public function update($id, $data)
{
    $this->db->update('guru', $data, ['id' => $id]);
    return $this->db->affected_rows();
}
public function delete($id)
{
    $this->db->where('id', $id);
    $this->db->delete('guru');
}
public function getDefaultValues()
{
    return [
        'Nama_g'            => '',
        'Mapel_g'        => '',
        'photo'          => '',
    ];
}
public function totalGuru()
{
    $this->db->from('guru');
    return $this->db->count_all_results();
}
public function uploadImage($imageName){
    $config = [
      'upload_path'     => './img/identitas',
        'file_name'       => $imageName,
      'allowed_types'   => 'jpg|jpeg|png|JPG|PNG',
      'max_size'        => 3000,
      'max_width'       => 0,
      'max_height'      => 0,
      'overwrite'       => TRUE,
      'file_ext_tolower'=> TRUE
    ];

    $this->load->library('upload', $config);
}
public function getData()
{
    return $this->db->get('guru')->result();
}
   
    
}
/* End of file Guru_model.php */