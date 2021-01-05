<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Foto_model extends CI_Model {
    
      public function cariDataFoto(){
        $keyword = $this->input->post("keyword");
        $this->db->like('id_foto',$keyword);
        $this->db->or_like('tanggal_foto',$keyword);
        $this->db->or_like('judul',$keyword);
        $this->db->or_like('isi_foto',$keyword);
        return $this->db->get('foto') -> result();
      }

      public function tampilData(){
        $value = $this->db->get('foto')->result();
        return $value;
      }
      
      public function getDataById($id_foto){
        return $this->db->get_where('foto',array('id_foto'=>$id_foto))->row_array();
      }

      public function hapusData($id_foto){
        $this->hapusDataFoto($id_foto);
        return $this->db->delete('foto',array('id_foto' => $id_foto));
      }

      public function editData($upload,$id_foto){
        $uploads;
        if($upload > 0){
          $uploads = $upload['file']['file_name'];
        }
        else{
          $uploads = $this->input->post('tempImg');
        }

        $data = array(
          'id_foto' => $this->input->post('id_foto',true),
          'tanggal_foto' => $this->input->post('tanggal_foto', true),
          'judul' => $this->input->post('judul', true),
          'isi_foto' => $uploads,
      );

        $this->db->where('id_foto', $this->input->post('id_foto'));
        $this->db->update('foto', $data);
      }

      public function tambahData($upload)
        {
            $data = array(
              'id_foto' => $this->input->post('id_foto',true),
              'tanggal_foto' => $this->input->post('tanggal_foto', true),
              'judul' => $this->input->post('judul', true),
              'isi_foto' => $upload['file']['file_name'],
            );

            $this->db->insert('foto', $data);
        }

        public function upload(){    
          $config['upload_path'] = './images/foto/';    
          $config['allowed_types'] = 'jpg|png|jpeg|gif';
          $this->load->library('upload', $config);
          if($this->upload->do_upload('isi_foto')){
              $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
              return $return;
          }else{    
              $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
              return $return;   
          }  
      }

      

    private function hapusDataFoto($id)
    {
        $foto = $this->getDataById($id);
        $filename = $foto['isi_foto'];
        unlink(FCPATH."uploads/foto/".$filename);
    }

    public function datatabels(){
      $query=$this->db->order_by('id_foto','DESC')->get('foto');
      return $query->result();
  }

    }
    
    /* End of file blog_model.php */
    
?>