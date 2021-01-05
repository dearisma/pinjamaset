<?php    
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Foto extends CI_Controller {        
        public function __construct()
        {
            parent::__construct();
           // $this->load->library('form_validation');
            $this->load->model('Foto_model');
        }
    
    
        public function index(){
    
            $data['foto'] = $this->Foto_model->tampilData();
            $this->load->view('templates_pengurus/header');
            $this->load->view('templates_pengurus/sidebar', $data);
            $this->load->view('Foto/index',$data);
            $this->load->view('templates_pengurus/footer');
        }
        public function tambah()
        {
            // $this->form_validation->set_rules('id_foto', 'ID FOTO', 'required');
            $this->form_validation->set_rules('judul', 'JUDUL', 'required');
            $this->form_validation->set_rules('tanggal_foto', 'TANGGAL', 'required');
            if ($this->form_validation->run() == FALSE) {   
                $this->load->view('templates_pengurus/header');
                $this->load->view('templates_pengurus/sidebar');
                $this->load->view('foto/tambah');
                $this->load->view('templates_pengurus/footer');
            } else {
                $upload = $this->Foto_model->upload();
                if ($upload['result'] == 'success') {
                    $this->Foto_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Product added');
                    redirect('Foto/index');
                }else{
                    echo $upload['error'];
                }       
            }
        }
        
        public function detail($id_foto){
            $data['foto'] = $this->Foto_model->getDataById($id_foto);
            $this->load->view('templates_pengurus/header');
            $this->load->view('templates_pengurus/sidebar', $data);
            $this->load->view('foto/detail', $data);
            $this->load->view('templates_pengurus/footer');
        }
        public function hapus($id_foto){
            $this->Foto_model->hapusData($id_foto);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('foto/index','refresh');     
        }
        public function edit($id_foto)
        {
            $data['foto']=$this->Foto_model->getDataById($id_foto);
            $this->form_validation->set_rules('id_foto', 'ID FOTO', 'required');
            $this->form_validation->set_rules('judul', 'JUDUL', 'required');
            $this->form_validation->set_rules('tanggal_foto', 'TANGGAL', 'required');
            if ($this->form_validation->run() == FALSE) {    
              // $data['isi_foto'] = $this->input->post('tempImg');
                $this->load->view('templates_pengurus/header');
                $this->load->view('templates_pengurus/sidebar', $data);
                $this->load->view('foto/edit',$data);
                $this->load->view('templates_pengurus/footer');
                                
            } else {
                if(isset($_POST['submit'])){
                    $filename = $this->input->post('tempImg');
                    if(isset($_FILES['isi_foto']['name']) && $_FILES['isi_foto']['name'] != ''){ 
                        $oldFile = $this->Foto_model->getDataById($id_foto);
                        $upload = $this->Foto_model->upload();
                        $this->Foto_model->editData($upload, $id_foto);
                        if($oldFile->isi_foto != null){
                            $filename = $oldFile['isi_foto'];
                            unlink(FCPATH."uploads/isi_foto/".$filename);   
                        }
                    }else{
                        $this->Foto_model->editData($filename,$id_foto);
                    }
                    redirect('foto/index');
                }
            }
        }
    }   
    /* End of file Blog.php */
?>