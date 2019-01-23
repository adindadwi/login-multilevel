<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login_view');
    }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='admin'){
          $this->load->view('admin/home');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function siswa(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='siswa'){
      $this->load->view('siswa/home');
    }else{
        echo "Access Denied";
    }
  }
}