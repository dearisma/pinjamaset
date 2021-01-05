<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        //Do your magic here
        $this->load->model('Register_Model');
        $this->load->library('form_validation');
        
        // validasi level
        //if($this->session->userdata('level')!="user"){
            
           // redirect('login','refresh');-->
            
        //}
    }

    public function index()
    {
        //modul untuk load database
        // $this->load->database();
        $this->load->model('Register_Model');
        $data['title']='Register'; 
        $data['user']  =$this->Register_Model->getAlluser();
        if ($this->input->post('keyword'));
            // code
     //   $data['user']=$this->Register_Model->cariDatauser();

        //$this->load->view('template/header',$data);
       // $this->load->view('register/index',$data);
        //$this->load->view('template/footer');
        $this->load->view('templates_anggota/header', $data);
        $this->load->view('templates_anggota/sidebar');
        $this->load->view('Register/tambah', $data);
        $this->load->view('templates_anggota/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data user';

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
       // $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        
       // if ($this->form_validation->run() == FALSE) {
        //    $this->load->view('template/header',$data);
         //   $this->load->view('register/tambah',$data);
         //   $this->load->view('template/footer');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_anggota/header', $data);
            $this->load->view('templates_anggota/sidebar', $data);
            $this->load->view('anggota/register', $data);
            $this->load->view('templates_anggota/footer');
        } else {
            $this->Register_Model->tambahdatauser();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('anggota/user','refresh');
        }
    }

    public function edit(){
        $data['title']='Form Edit Data User';
        $data['user']=$this->Register_Model->getuser();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('templates_pengurus/header', $data);
            $this->load->view('templates_pengurus/sidebar', $data);
            $this->load->view('register/edit', $data);
            $this->load->view('templates_pengurus/footer');
        } else {
            # code...
            $this->Register_Model->ubahdatauser();
            $this->session->set_flashdata('flash-data', 'diedit');
            
            redirect('pengurus/user','refresh');
            
        }
    }

    public function delete()
    {
        $this->load->model("Register_Model");
        $this->Register_Model->hapusdatauser($id);
        $this->load->library('session');
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('pengurus/user','refresh');
    }
   
}
/* End of file Controllername.php */
?>