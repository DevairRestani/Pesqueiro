<?php
class Verificar extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }
    
    function valida(){
        $dados;

        $dados['login'] = $this->input->post('usuario');
        $dados['senha'] = $this->input->post('senha');

        $this->load->model('login/Busca');
        $rs = $this->Busca->index($dados);

        var_dump($rs);
        die;
    }
}