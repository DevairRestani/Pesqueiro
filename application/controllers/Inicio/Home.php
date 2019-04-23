<?php
class Home extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function index(){
      $this->load->view('comum/navBar');
      $this->load->view('comum/listagem');
      $this->load->view('comum/footer');
    }
}