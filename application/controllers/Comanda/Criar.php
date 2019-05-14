<?php

class Criar extends CI_Controller{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();
        // print_r($dados); die;

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
        $idComanda = $this->CriarComanda->salvarComanda($comanda);
        $compra['comandaID'] = $this->CriarComanda->salvarComanda($comanda);

        //$numeroElementos = intval($this->input->post('tiposDeProdutos'));
        

        $i = 0;

        if($this->input->post('produto_'.$i) != null){
            while($this->input->post('produto_'.$i) !== null){

                $produto['produtoID'] = intval($this->input->post('produto_'.$i));
                $produto['quantidade'] = intval($this->input->post('qtd_'.$i));

                $this->load->model('Estoque/Editar');
                if($this->Editar->baixaEstoque($produto) == true){
                    $this->load->model('Compra/Adicionar');
                    $compra['produtoID'] = $produto['produtoID'];
                    $compra['quantidade'] = $produto['quantidade'];
                    $this->Adicionar->adicionarCompra($compra);
                }else{
                    echo("Deu ruim");
                }

                $i++;
            }
        }

        $this->load->model('Produto/Produtos');
        $dados['produto'] = $this->Produtos->listar();
        // print_r($dados); die;

        $this->load->view('comum/navbar', $dados);
        $this->load->view('comanda/adicionar');
        $this->load->view('comum/footer');
    }
}