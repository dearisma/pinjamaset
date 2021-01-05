<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_pengurus/header');
        $this->load->view('templates_pengurus/sidebar');
        $this->load->view('pengurus/dashboard');
        $this->load->view('templates_pengurus/footer');
    }

}

/* End of file Dashboard.php */
