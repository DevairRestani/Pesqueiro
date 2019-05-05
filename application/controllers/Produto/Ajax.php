<?php

class Ajax extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function receberObjetos(){
        $this->load->model('Produto/Produtos');
        
        return json_encode($this->Produtos->listar());
    }
}