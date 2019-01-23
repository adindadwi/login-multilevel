<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user_model');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {

            $this->load->view("admin/home");         

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login_view");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_view');
    }

}