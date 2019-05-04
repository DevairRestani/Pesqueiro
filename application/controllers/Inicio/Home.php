<?php
class Home extends CI_Controller{

    function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->load->model('listagem/Listar');
      $dados['dados'] = $this->Listar->listarComandas();

      $this->load->view('comum/navBar');
      $this->load->view('comum/listagem', $dados);
      $this->load->view('comum/footer');
    }
}