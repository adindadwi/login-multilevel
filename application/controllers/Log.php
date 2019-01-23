<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{
    public function index() {
        $data['login'] = $this->user_model->selectPegawai();
        $this->load->view('login_view', $data); 
    }

    public function in() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        if ($user == "admin" && $pass == "admin123"){ // Administrator
            $this->session->set_userdata('level', 'admin');
            redirect('admin/home');
        }
        else if ($user == "btn123" && $pass == "123btn"){ // User
            $this->session->set_userdata('level', 'user');
            redirect('user/home');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password SALAH!');
            redirect('log');
        }
    }

    public function out() {
        $this->session->sess_destroy();
        redirect('log');
    }

    public function cek() {
        # code...
    }
}

/* End of file Admin.php */
?>