<?php
class Detalhes extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function index(){
        $dados['linkAdicionar'] = 'produto/adicionar';

        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();

        $this->load->view('comum/navBar', $dados);
        $this->load->view('comum/listagem');
        $this->load->view('comum/footer');
    }
}