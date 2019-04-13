<?php
class Defalt extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }
    
   public function index(){
       //$dados;

      // $dados['login'] = 'admin@admin.com.br';
      // $dados['senha'] = sha1('123456');

      //  $this->load->model('login/Insere');
      //  $this->Insere->index($dados);
       $this->load->view('login/index');
   }
  
}