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

        $querry = $this->db->get();

        return $querry->result_array();
    }

    public function inserir($dados){
        $this->db->insert('produtos', $dados);

        return $this->db->insert_id();
    }

}