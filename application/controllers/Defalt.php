<?php
class Defalt extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }
    
   public function index(){
      $this->load->view('login/index');
   }

  
}