<?php
class Home extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function index(){
      $this->load->view('comum/navBar');
      $this->load->view('home/index');
      $this->load->view('comum/footer');
      $this->db->where('login', $dados['usuario']);
    }
}