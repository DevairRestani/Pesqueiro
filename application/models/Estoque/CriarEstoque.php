<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CriarEstoque extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function InserirProduto($dados){
        $this->db->insert('produtos', $dados);

        return $this->db->insert_id();
    }

    public function InserirEstoque($dados){
        $this->db->insert('estoque', $dados);
    }
}