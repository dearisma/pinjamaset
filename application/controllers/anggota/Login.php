<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_pengurus/header');
        $this->load->view('anggota/login');
        $this->load->view('templates_pengurus/footer');
    }
    
    public function proses_login(){

        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password harus diisi!']);

        

        if($this->form_validation->run() == FALSE){
            
            $this->load->view('templates_pengurus/header');
            $this->load->view('anggota/login');
            $this->load->view('templates_pengurus/footer');
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = $password;

            $cek = $this->Login_Model->cek_login($user, $pass);

            if($cek->num_rows() > 0){
                foreach($cek->result() as $ck){
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                if($sess_data['level'] == 'Pengurus'){

                    $secret_key = "6LcT1PEUAAAAAE-hCl9QV89kvmbK-qAyPWTLLc69";
                    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
                    $response = json_decode($verify);

                        if($response->success){ // Jika proses validasi captcha berhasil
                            redirect('pengurus/dashboard');
                        }
                        else{ // Jika captcha tidak valid
                            echo "<h2>Captcha Tidak Valid</h2>";
                            echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
                            echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
                            redirect('anggota/login');
                        } 
                }
                else if($sess_data['level'] == 'Anggota'){
                    $secret_key = "6LcT1PEUAAAAAE-hCl9QV89kvmbK-qAyPWTLLc69";
                    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
                    $response = json_decode($verify);

                    if($response->success){ // Jika proses validasi captcha berhasil
                        redirect('anggota/dashboard');
                    }
                    else{ // Jika captcha tidak valid
                        echo "<h2>Captcha Tidak Valid</h2>";
                        echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
                        echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
                        redirect('anggota/login');
                    }
                }
                
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username atau Password salah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                    redirect('anggota/login');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('anggota/login');
    }

}

/* End of file Login.php */
