<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller{

    function __construct(){
      parent::__construct();
    }

    public function index(){
        $id = $this->uri->segment(3);
        
        $this->load->model('Estoque/Buscar');
        $dados['produto'] = $this->Buscar->buscaProduto($id);

        $this->load->view('comum/navBar', $dados);
        $this->load->view('estoque/adicionar');
        $this->load->view('comum/footer');
    }

    public function alterar(){
        $produto['nome'] = $this->input->post('NomeProduto');
        $produto['valor'] = $this->input->post('valor');
        $estoque['quantidade'] = $this->input->post('quantidade');
        $id = $this->input->post('id');

        $this->load->model('Estoque/Buscar');
        $this->Buscar->alterarProduto($estoque, $id, 'estoque', 'produtoID');
        $this->Buscar->alterarProduto($produto, $id, 'produtos', 'id');

        $this->load->view('comum/navBar');
        $this->load->view('estoque/adicionar');
        $this->load->view('comum/footer');
    }
}