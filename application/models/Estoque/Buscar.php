<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();  // construct the Model class
    }

    public function buscaProduto($id){
        $this->db->select('*');
        $this->db->from('estoque');
        $this->db->join('produtos', 'estoque.produtoID = produtos.id');
        $this->db->where('produtoID', $id);



        $dados = $this->db->get();


        return $dados->result_array();
    }

    public function alterarProduto($dados, $id, $nomeTabela, $nomeParametro){
        $this->db->where($nomeParametro, $id);
        $this->db->update($nomeTabela, $dados);
        
    }
}