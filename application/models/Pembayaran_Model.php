<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_Model extends CI_Model {

    public function cariDataPembayaran(){
        $keyword = $this->input->post("keyword");
        $this->db->like('id',$keyword);
        $this->db->like('id_anggota',$keyword);
        $this->db->or_like('tanggal',$keyword);
        $this->db->or_like('jumlah',$keyword);
        return $this->db->get('kas') -> result();
      }


    public function getAll()
    {
        // $query=$this->db->get('kas');
        $query = $this->db->query("SELECT a.id, a.id_anggota, b.nama, 
        a.tanggal, a.jumlah, a.foto, a.terima from kas as a inner join 
        user as b on b.id = a.id_anggota " );

        return $query->result_array();
    }

    public function getAll_a()
    {
        // $query=$this->db->get('kas');
        $query = $this->db->query("SELECT a.id, a.id_anggota, b.nama, 
        a.tanggal, a.jumlah, a.foto, a.terima from kas as a inner join 
        user as b on b.id = a.id_anggota where b.username='$_SESSION[username]'");
        return $query->result_array();
    }

    public function setYes($id){
        $this->db->set('terima', "Y");
        $this->db->where('id',$id);
        $this->db->update('kas');
    }

    public function setNo($id){
        $this->db->set('terima', "N");
        $this->db->where('id',$id);
        $this->db->update('kas');
    }

    public function tambahData($upload)
    {
        $data = array(
            'id_anggota'=>$this->input->post('id_anggota', true),
            'tanggal'=>$this->input->post('tanggal', true),
            'jumlah'=>$this->input->post('jumlah', true),
            'foto' => $upload['file']['file_name'],
            );
            $this->db->insert('kas', $data);
    }    

    public function upload(){    
        $config['upload_path'] = './images/pembayaran/';    
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
            return $return;   
        }  
    }

    public function ubahData($upload,$id){
        $uploads;
        if($upload > 0){
          $uploads = $upload['file']['file_name'];
        }
        else{
          $uploads = $this->input->post('tempImg');
        }

        $data = array(
          'id_anggota' => $this->input->post('id_anggota',true),
          'tanggal' => $this->input->post('tanggal', true),
          'jumlah' => $this->input->post('jumlah', true),
          'foto' => $uploads,
      );
        $kasEdit = array('kas' => $this->input->post('kas', true));
        $this->db->update('kas', $data);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kas', $data);

      }

    public function hapusDataImage($id){
        $kas = $this->getPembayaranById($id);
        if(file_exists($filename = isset($kas['foto']))){
            unlink(FCPATH."uploads/foto/".$filename);
        };
        
    }

    public function hapusData($id){
        $this->hapusDataImage($id);
        return $this->db->delete('kas', array('id' => $id));
    }

    public function getpembayaranByID($id){
        return $this->db->get_where('kas',['id'=> $id])->row_array();
    }

    public function datatabels(){
        $query=$this->db->order_by('id','DESC')->get('kas');
        return $query->result();
    }
}

/* End of file Pembayaran_Model.php */
