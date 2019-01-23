<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
	}
	
	// function cek_login($username, $password, $level)
    // {
    //     $query = "select * from tbl_user where username='".$username."' and password='".md5($password)."' and level='".$level."'";
    //     $hasil=$this->db->query($query);
 
    //     if ($hasil->num_rows() == 1) { // jika data = 1
    //             return $hasil->row_array();
    //     } else {
    //              return FALSE; // else mengembalikan FALSE
    //             }
    //     }
        
        // function adminfromdb($username)
        // {
		// $query = "select * from tbl_user where username='".$user."'";
        // $hasil=$this->db->query($query)->result();
        // return $hasil;
		// }
		function validate($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$result = $this->db->get('tbl_user',1);
			return $result;
		  }
	}
?>
        

