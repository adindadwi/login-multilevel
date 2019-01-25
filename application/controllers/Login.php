<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
            
        $this->load->model('user_model');
    }

    public function index()
    {
        
        $this->load->library('session');
        
        $this->load->view('login_view');
        
    }

    function auth(){
        $username = $this->input->post('username',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->user_model->validate($username,$password);
        if($validate->num_rows() > 0){
            $data = $validate->row_array();
            $username = $data['username'];
            $level = $data['level'];
            $sesdata = array(
                'username'  => $name,
                'level'     => $level,
                'logged_in' => TRUE
            );
            
            $this->load->library('session');
            
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($level === 'admin'){
                redirect('page');
                
            // access login for siswa
            }else{
                redirect('page/siswa');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
        }
      }

    // public function login(){
    //     //load session library
    //     // $this->load->library('session');

    //     //set form validation
    //     // $this->form_validation->set_rules('username', 'Username', 'required');
    //     // $this->form_validation->set_rules('password', 'Password', 'required');

    //     //set message form validation
    //     // $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
    //     // <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

    //     //cek validasi
    //     // if ($this->form_validation->run() == TRUE) {
            
    //         $this->load->model('user_model');

    //         //get data dari FORM
    //         $username = $this->input->post("username", TRUE);
    //         $password = md5($this->input->post('password', TRUE));
    //         $level = $this->input->post('level', TRUE);
            
    //         $this->load->model('user_model');
            
    //         //checking data via model
    //         $checking = $this->user_model->cek_login('tbl_user', array('username' => $username), array('password' => $password), array('level' => $level));

    //         //jika ditemukan, maka create session
    //         if ($checking == TRUE) {
                
    //             foreach ($checking as $apps) {

    //                 $session_data = array(
    //                     'id_user' => $apps->id_user,
    //                     'username' => $apps->username,
    //                     'password' => $apps->password,
    //                     'level' => $apps->level
    //                 );
    //                 //set session userdata
    //                 $this->session->set_userdata($session_data);
    //                 if($level === 'admin'){
    //                     redirect('page');
    //                 } else {
    //                     redirect('page/siswa');
    //                 }
    //             }
    //         }else{

    //             $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
    //                 <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
    //             $this->load->view('login_view', $data);
    //         }
    //     }
    //     // }else{
            
    //     //     $this->load->view('login_view');
            
    //     // }

        function logout(){
           $this->session->sess_destroy();
           redirect('login/index');
        }
    }
?>


