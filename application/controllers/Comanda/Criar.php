<?php

class Criar extends CI_Controller{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();

        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar', $dados);
        $this->load->view('comum/footer');
    }

    public function Salvar(){
        session_start();

        $comanda['nome'] = $this->input->post('NomeProprietario');
        $comanda['administradorID'] = $_SESSION['id'];
        $comanda['estado'] = 1;

        $this->load->model('Comanda/CriarComanda');
        $compra['comandaID'] = $this->CriarComanda->salvarComanda($comanda);

        $numeroElementos = intval($this->input->post('tiposDeProdutos'));
        $this->load->model('Compra/Adicionar');

        for($i = 0; $i < $numeroElementos; $i += 1){
            $compra['produtoID'] = intval($this->input->post('nome'.$i));
            $compra['quantidade'] = intval($this->input->post('quantidade'.$i));

            $this->Adicionar->adicionarCompra($compra);
        }

        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar');
        $this->load->view('comum/footer');
    }
}