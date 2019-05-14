<?php
class Editar extends CI_Controller{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        
        $id = intval($this->uri->segment(3));
        
        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();

        $this->load->model('Comanda/BuscaCompras');
        $dados['dados']['comanda'] = $this->BuscaCompras->search($id);
        $dados['dados']['comprados'] = $this->BuscaCompras->search2($id);

        //$compras = $this->BuscaCompras->buscar($dados['dados']['id']);
        
        $this->load->view('comum/navbar', $dados);
        $this->load->view('comanda/adicionar');
        $this->load->view('comum/footer');
    }

}