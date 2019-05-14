<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function listar(){
        $this->db->select("*");
        $this->db->from("produtos");
        $this->db->join("estoque", "estoque.produtoID = produtos.id");

        $query = $this->db->get();

        return $query->result_array();
    }

    public function buscarProdutosPor($id){
        $this->db->select("nome");
        $this->db->from("produtos");
        $this->db->where("id", $id[0]);

        $j = 1;
        while(isset($id[$j])){
            $this->db->or_where("id", $id[$j]);
            $j++;
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    public function inserir($dados){
        $this->db->insert('produtos', $dados);

        return $this->db->insert_id();
    }

}