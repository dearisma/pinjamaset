<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_anggota/header');
        $this->load->view('anggota/dashboard');
        $this->load->view('templates_anggota/footer');
    }

}

/* End of file Dashboard.php */
?>