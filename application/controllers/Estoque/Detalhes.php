<?php
class Detalhes extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function index(){
        $dados['linkAdicionar'] = 'produto/adicionar';

        $this->load->view('comum/navBar');
        $this->load->view('comum/listagem', $dados);
        $this->load->view('comum/footer');
    }
}