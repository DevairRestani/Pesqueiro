<?php
class Editar extends CI_Controller{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){

        $dados['dados']['id'] = $this->uri->segment(3);
        
        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();

        $this->load->model('Comanda/BuscaCompras');
        $dados['dados']['comprados'] = $this->BuscaCompras->buscar($dados['dados']['id']);

        // print_r($dados); die;
        
        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar', $dados);
        $this->load->view('comum/footer');
    }

}