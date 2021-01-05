<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {

   public function getAlluser()
    {
        $query=$this->db->get('user');

        return $query->result_array();
    }
    public function tambahdatauser(){
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
        $this->db->insert('user', $data);
        // redirect('varian','refresh');   
    }
    
    public function getuserByID($id){
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }

    public function getuser(){
        return $this->db->get_where('user',['id'])->row_array();
    }
    
    public function ubahdatauser(){
        $data=[
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }    
    
    public function hapusdatauser($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function datatabels(){
        $query= $this->db->order_by('id','DESC')->get('user');
        return $query->result();
    }

}

/* End of file varian_models.php */

?>