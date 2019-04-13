<?php
class Defalt extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }
    
   public function index(){
<<<<<<< HEAD
       //$dados;

      // $dados['login'] = 'admin@admin.com.br';
      // $dados['senha'] = sha1('123456');

      //  $this->load->model('login/Insere');
      //  $this->Insere->index($dados);
       $this->load->view('login/index');
=======
      $this->load->view('login/index');
>>>>>>> ffcdc55c6393541d506f035e513ddfa44e5e799b
   }
  
}