<?php

class Ajax extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function receberObjetos(){
        $this->load->model('Produto/Produtos');
        
        echo json_encode($this->Produtos->listar());
    }
}