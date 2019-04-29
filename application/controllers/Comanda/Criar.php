<?php

class Criar extends CI_Controller{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar');
        $this->load->view('comum/footer');
    }

    public function Salvar(){
        session_start();

        $comanda['nome'] = $this->input->post('NomeProprietario');
        $comanda['administradorID'] = $_SESSION['id'];

        $this->load->model('Comanda/CriarComanda');
        $this->CriarComanda->salvarComanda($comanda);

        $this->load->view('comum/navbar');
        $this->load->view('comanda/adicionar');
        $this->load->view('comum/footer');
    }
}