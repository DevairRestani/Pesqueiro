<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Criar extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function index(){
        $this->load->view('comum/navBar');
        $this->load->view('estoque/adicionar');
        $this->load->view('comum/footer');
    }

    public function Salvar(){
        $produto['nome'] = $this->input->post('NomeProduto');
        $produto['valor'] = $this->input->post('valor');

        $this->load->model('Produto/Produtos');
        $id = $this->Produtos->inserir($produto);

        $estoque['quantidade'] = $this->input->post('quantidade');
        $estoque['produtoID'] = intval($id);
        $this->load->model('Estoque/CriarEstoque');
        $this->CriarEstoque->InserirEstoque($estoque);

        $this->load->view('comum/navBar');
        $this->load->view('comum/listagem');
        $this->load->view('comum/footer');
    }
}