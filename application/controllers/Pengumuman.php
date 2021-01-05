<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent::__controller
        parent::__construct();
        $this->load->library('form_validation'); 
        $this->load->model('Pengumuman_model');
        
        // validasi level
       // if($this->session->userdata('level')!="admin"){
            
         //   redirect('login','refresh');
        
     //   }
    }

    public function index(){
        $data['title']='List Pengumuman';
        $data['pengumuman']=$this->Pengumuman_model->getAllPengumuman();
        if ($this->input->post('keyword')){
            // code
            $data['pengumuman']=$this->Pengumuman_model->cariDataPengumuman();
        }
        $this->load->view('templates_pengurus/header', $data);
        $this->load->view('templates_pengurus/sidebar', $data);
        $this->load->view('Pengumuman/index', $data);
        $this->load->view('templates_pengurus/footer');
    }
    
    public function tambah(){

        $data['title']='Form Menambahkan Data Pengumuman';
        
        // $this->form_validation->set_rules('fieldname','fieldlabel','trim|required|min_length[5]max_length[12]');
        $this->form_validation->set_rules('id_pengumuman', 'Nomor Pengumuman', 'required');
        $this->form_validation->set_rules('tanggal_pengumuman', 'Tanggal Pengumuman', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
      
        if ($this->form_validation->run() == FALSE) {
            //code...
            $this->load->view('templates_pengurus/header',$data);
            $this->load->view('templates_pengurus/sidebar', $data);
            $this->load->view('Pengumuman/tambah',$data);
            $this->load->view('templates_pengurus/footer');
        } else {
            //code
            $this->Pengumuman_model->tambahdataPengumuman();
            // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('Pengumuman','refresh');
          
        }
    }
    
    public function hapus($id_pengumuman){
        $this->Pengumuman_model->hapusdataPengumuman($id_pengumuman);
        // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('Pengumuman','refresh');
    }

    public function detail($id_pengumuman){
        $data['title']='Detail Pengumuman'; 
        $data['pengumuman']  =$this->Pengumuman_model->getPengumumanByID($id_pengumuman);
        $this->load->view('templates_pengurus/header',$data);
        $this->load->view('templates_pengurus/sidebar', $data);
        $this->load->view('Pengumuman/detail',$data);
        $this->load->view('templates_pengurus/footer');
    }
    public function edit($id_pengumuman){
        $data['title']='From Edit Data Pengumuman'; 
        $data['pengumuman']  =$this->Pengumuman_model->getPengumumanByID($id_pengumuman);
        
        $this->form_validation->set_rules('id_pengumuman', 'Nomor Pengumuman', 'required');
        $this->form_validation->set_rules('tanggal_pengumuman', 'Tanggal Pengumuman', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
      
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_pengurus/header',$data);
            $this->load->view('templates_pengurus/sidebar', $data);
            $this->load->view('Pengumuman/edit',$data);
            $this->load->view('templates_pengurus/footer');
        } else {
            $this->Pengumuman_model->ubahdataPengumuman();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('Pengumuman','refresh');
        }

    }
}
/* End of file Controllername.php */
?>
