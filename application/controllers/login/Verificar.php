<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verificar extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $dados['login'] = $this->input->post('usuario');
        $dados['senha'] = sha1($this->input->post('senha'));

        $this->load->model('login/Buscar');

        $rs = $this->Buscar->index($dados);
        
        if($rs->num_rows() == 1){
            $responseRow = $rs->row_array();

            session_start();
            $_SESSION['login'] = $dados['login'];
            $_SESSION['email'] = $responseRow['email'];
            $_SESSION['id'] = intval($responseRow['id']);

            $this->load->view('comum/navBar');
            $this->load->view('comum/listagem');
            $this->load->view('comum/footer');
        }else{
            $erro['erro'] = 1;
            $this->load->view('login/index', $erro);
        }
    }

}