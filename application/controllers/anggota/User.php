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
        // $this->load->view('varian/user');
        $this->load->view('templates_anggota/header', $data);
        $this->load->view('anggota/user',$data);
        $this->load->view('templates_anggota/footer');
    }

    public function laporan_pdf(){
        $this->load->library('pdf');

        $this->load->model('cetak_model');
        $data['user']= $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan-petanikode.pdf";
        $this->pdf->load_view('user/laporan', $data);
    }

    public function foto()
    {
      $data = array(
        "title" => 'Data Foto',
        "foto" => $this->Foto_model->datatabels()
    );
    $this->load->view('templates_anggota/header',$data);
    $this->load->view('foto/user',$data);
    $this->load->view('templates_anggota/footer');
    }

    public function pengumuman()
    {
      $data = array(
        "title" => 'Data Pengumuman',
        "pengumuman" => $this->Pengumuman_model->datatabels()
    );
    $this->load->view('templates_anggota/header',$data);
    $this->load->view('pengumuman/user',$data);
    $this->load->view('templates_anggota/footer');
  }
}

/* End of file user.php */

?>
