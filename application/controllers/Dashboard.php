<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   function __construct(){
       parent::__construct();
       $this->simple_login->cek_login();
   }

   //Load Halaman dashboard
   public function index() {
       $this->load->view('account/v_dashboard');
   }

   public function logout() {
    // Unset user session data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');

    // Redirect to login page
    redirect('auth/login');
}
}   
}