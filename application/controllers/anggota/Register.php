<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        //Do your magic here
        $this->load->model('register_model');
        $this->load->library('form_validation');
        
       
    }

    public function index()
    {
        //modul untuk load database
        // $this->load->database();
        $this->load->model('register_model');
        $data['title']='Register'; 
     //   $data['user']  =$this->register_model->getAlluser();
        if ($this->input->post('keyword'));
            // code
     //   $data['user']=$this->register_model->cariDatauser();

        $this->load->view('templates_anggota/header_register', $data);
        $this->load->view('Register/index', $data);
        $this->load->view('templates_anggota/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data Anggota';

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('tanggl_lahir', 'Tanggal_Lahir', 'date');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('blokir', 'blokir', 'required');
       // $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_anggota/header_register');
            $this->load->view('register/tambah');
            $this->load->view('templates_anggota/footer');
        } else {
            $this->register_model->tambahdatauser();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('anggota/register','refresh');
        }
    }

    
   
}
/* End of file Controllername.php */
?>