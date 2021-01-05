<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Login_Model');
        $this->load->model('User_Model');
      //validasi level
     // if($this->session->userdata('level')!="user"){
       //   redirect('login','refresh');
      //}
    }

    public function index(){
        $data = array(
            'title'=>'Data User',
            'user'=>$this->User_Model->datatabels()
        );
        // $this->load->view('User/user');
        $this->load->view('templates_pengurus/header', $data);
        $this->load->view('templates_pengurus/sidebar');
        $this->load->view('pengurus/User',$data);
        $this->load->view('templates_pengurus/footer');
    }

    public function hapus($id){
        $this->load->model("User_model");
        $this->User_Model->hapusdatauser($id);
        $this->load->library('session');
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('User','refresh');
    }

    public function edit($id){
        $data['title']='From Edit Data User'; 
        $data['user']  =$this->User_Model->getuserByID($id);
        
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_pengurus/header', $data);
            $this->load->view('templates_pengurus/sidebar');
            $this->load->view('pengurus/edit', $data);
            $this->load->view('templates_pengurus/footer');
        } else {
            $this->User_model->ubahdatauser();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('User','refresh');
        }
    }

}

/* End of file user.php */

?>
