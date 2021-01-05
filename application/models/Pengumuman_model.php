<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Pengumuman_model extends CI_Model {
    
    public function getAllpengumuman()
    {
        $query=$this->db->get('pengumuman');
        return $query->result_array();
        
        // atau bisa juga menggunakan code berikut
         return $this->db->get('pengumuman')->result_array();
    }
    public function tambahdatapengumuman(){
        $data=[
            "id_pengumuman"=> $this->input->post('id_pengumuman',true),
            "tanggal_pengumuman"=> $this->input->post('tanggal_pengumuman',true),
            "isi"=> $this->input->post('isi',true),
        ];
        $this->db->insert('pengumuman',$data);
    }
    public function hapusdatapengumuman($id){
        $this->db->where('id_pengumuman',$id);
        $this->db->delete('pengumuman');
    }
    public function getpengumumanByID($id){
        return $this->db->get_where('pengumuman',['id_pengumuman'=>$id])->row_array();
    }
    public function ubahdatapengumuman(){
        $data=[
            "id_pengumuman"=> $this->input->post('id_pengumuman',true),
            "tanggal_pengumuman"=> $this->input->post('tanggal_pengumuman',true),
            "isi"=> $this->input->post('isi',true),
        ];
        $this->db->where('id_pengumuman',$this->input->post('id_pengumuman'));
        $this->db->update('pengumuman',$data);
    }
    public function cariDatapengumuman(){
        $keyword = $this->input->post('keyword');
        $this->db->like('id_pengumuman', $keyword);
        $this->db->or_like('isi', $keyword);
        $this->db->or_like('tanggal_pengumuman', $keyword);
        return $this->db->get('pengumuman')->result_array();
     }

    public function datatabels(){
        $query=$this->db->order_by('id_pengumuman','DESC')->get('pengumuman');
        return $query->result();
    }
}

/* End of file mahasiswa_model.php */

?>