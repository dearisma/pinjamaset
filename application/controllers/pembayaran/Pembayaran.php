<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
           // $this->load->library('form_validation');
            $this->load->model('Pembayaran_Model');
        }

    public function index()
    {
        $data['kas'] = $this->Pembayaran_Model->getAll();
        
        $this->load->view('templates_pengurus/header', $data);
        $this->load->view('templates_pengurus/sidebar', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates_pengurus/footer', $data);

    }

    public function index_a()
    {
        $data['kas'] = $this->Pembayaran_Model->getAll_a();
        
        $this->load->view('templates_anggota/header', $data);
        $this->load->view('pembayaran/index_a', $data);
        $this->load->view('templates_anggota/footer', $data);

    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_anggota', 'Id Anggota', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
      
        if ($this->form_validation->run() == FALSE) {
            //code...
            $this->load->view('templates_pengurus/header');
            $this->load->view('templates_pengurus/sidebar');
            $this->load->view('pembayaran/tambah');
            $this->load->view('templates_pengurus/footer');
        }else {
            $upload = $this->Pembayaran_Model->upload();
            if ($upload['result'] == 'success') {
                $this->Pembayaran_Model->tambahData($upload);
                $this->session->set_flashdata('add', 'New Product added');
                redirect('pembayaran/Pembayaran/index');
            }else{
                echo $upload['error'];
            }       
        }
    }

    public function tambah_a(){

        $this->form_validation->set_rules('id_anggota', 'Id Anggota', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
      
        if ($this->form_validation->run() == FALSE) {
            //code...
            $this->load->view('templates_anggota/header');
            $this->load->view('pembayaran/tambah_a');
            $this->load->view('templates_anggota/footer');
        } else {
            $upload = $this->Pembayaran_Model->upload();
            if ($upload['result'] == 'success') {
                $this->Pembayaran_Model->tambahData($upload);
                $this->session->set_flashdata('add', 'New Product added');
                redirect('pembayaran/pembayaran/index_a');
            }else{
                echo $upload['error'];
            }       
        }
    }

    public function edit($id){
        $data['kas']  =$this->Pembayaran_Model->getpembayaranByID($id);
        $this->form_validation->set_rules('id_anggota', 'ID ANGGOTA', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_pengurus/header', $data);
            $this->load->view('templates_pengurus/sidebar');
            $this->load->view('pembayaran/edit', $data);
            $this->load->view('templates_pengurus/footer', $data);
        } else {
            if(isset($_POST['submit'])){
                $filename = $this->input->post('tempImg');
                if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){ 
                    $oldFile = $this->Pembayaran_Model->getpembayaranById($id);
                    $upload = $this->Pembayaran_Model->upload();
                    $this->Pembayaran_Model->ubahData($upload, $id);
                    if($oldFile['foto'] != null){
                        $filename = $oldFile['foto'];
                        unlink(FCPATH."uploads/foto/".$filename);   
                    }
                }else{
                    $this->Pembayaran_Model->ubahData($filename,$id);
                }
                redirect('pembayaran/pembayaran/index');
            }
        }

    }

    public function edit_a($id){
        $data['kas']  =$this->Pembayaran_Model->getpembayaranByID($id);
        $this->form_validation->set_rules('id_anggota', 'ID ANGGOTA', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_anggota/header', $data);
            $this->load->view('pembayaran/edit_a', $data);
            $this->load->view('templates_anggota/footer', $data);
        } else {
            if(isset($_POST['submit'])){
                $filename = $this->input->post('tempImg');
                if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){ 
                    $oldFile = $this->Pembayaran_Model->getpembayaranById($id);
                    $upload = $this->Pembayaran_Model->upload();
                    $this->Pembayaran_Model->ubahData($upload, $id);
                    if($oldFile['foto'] != null){
                        $filename = $oldFile['foto'];
                        unlink(FCPATH."uploads/foto/".$filename);   
                    }
                }else{
                    $this->Pembayaran_Model->ubahData($filename,$id);
                }
                redirect('pembayaran/pembayaran/index_a');
            }
        }

    }

    public function hapus($id){
        $this->Pembayaran_Model->hapusData($id);
        // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pembayaran/pembayaran','refresh');
        // die();
    }

    public function setYes($id){
        $this->Pembayaran_Model->setYes($id);
        // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        redirect('pembayaran/pembayaran','refresh');
    }

    public function setNo($id){
        $this->Pembayaran_Model->setNo($id);
        // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        redirect('pembayaran/pembayaran','refresh');
    }

    public function detail($id){
        $data['title']='Detail pembayaran'; 
        $data['kas']  =$this->Pembayaran_Model->getpembayaranByID($id);
        $this->load->view('templates_pengurus/header', $data);
        $this->load->view('templates_pengurus/sidebar');
        $this->load->view('pembayaran/detail', $data);
        $this->load->view('templates_pengurus/footer', $data);
    }

    public function detail_a($id){
        $data['title']='Detail pembayaran'; 
        $data['kas']  =$this->Pembayaran_Model->getpembayaranByID($id);
        $this->load->view('templates_anggota/header', $data);
        $this->load->view('pembayaran/detail_a', $data);
        $this->load->view('templates_anggota/footer', $data);
    }

    public function cetak(){
        $this->load->library('pdf');

        $this->load->model('Cetak_Model');
        $data['kas']= $this->Cetak_Model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan-pembayaran.pdf";
        $this->pdf->load_view('pembayaran/laporan', $data);
    }

    public function cetak_a(){
        $this->load->library('pdf_a');

        $this->load->model('Cetak_Model');
        $data['kas']= $this->Cetak_Model->view();
        $this->load->library('pdf_a');

        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan-pembayaran.pdf";
        $this->pdf->load_view('pembayaran/laporan_a', $data);
    }

    public function pdf(){
        $this->load->library('dompdf_gen');

        $data['kas'] = $this->Pembayaran_Model->getAll('kas');

        $this->load->view('pembayaran/laporan', $data);

        $paper_size = 'B5';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan-pembayaran.pdf", array('Attachment' => 0));
    }

    public function pdf_a(){
        $this->load->library('dompdf_gen');

        $data['kas'] = $this->Pembayaran_Model->getpembayaranById('kas');

        $this->load->view('pembayaran/laporan', $data);

        $paper_size = 'B5';
        $orientation = 'pfotrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan-pembayaran.pdf", array('Attachment' => 0));
    }

}

/* End of file Pembayaran.php */

?>