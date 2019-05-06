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
        //$compras = $this->BuscaCompras->buscar($dados['dados']['id']);
        
        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar', $compras);
        $this->load->view('comum/footer');
    }

}