<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function getAlluser()
    {
        $query=$this->db->get('user');

        return $query->result_array();
    }

    public function getuserByID($id){
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }

   public function getuser(){
        return $this->db->get_where('user')->row_array();
    }
    public function ubahdatauser($id){
        $data=[
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "level" => $this->input->post('level', true),
            "blokir" => $this->input->post('blokir', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('anggota', $data);
    }
    
    public function cariDatauser(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('user')->result_array();
    }
    
    public function datatabels(){
        $query= $this->db->order_by('id','DESC')->get('user');
        return $query->result();
    }
}

/* End of file varian_models.php */

?>