<?php
class Excluir extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $id = $this->uri->segment(3);

        $this->load->model('Estoque/ExcluirEstoque');
        $this->ExcluirEstoque->estoque($id);

        $dados['linkAdicionar'] = 'produto/adicionar';

        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();

        $this->load->view('comum/navbar', $dados);
        $this->load->view('Comum/listagem');
        $this->load->view('comum/footer');
    }

}