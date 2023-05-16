<?php
  class Instructores extends CI_Controller
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function index(){
      $this->load->view('header');
      $this->load->view('instructores/index');
      $this->load->view('footer');
    }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('instructores/nuevo');
      $this->load->view('footer');
    }
  }
 ?>
