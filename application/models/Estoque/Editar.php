<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();  // construct the Model class
    }

    public function baixaEstoque($produto){
        $this->db->set('quantidade','quantidade - '. $produto['quantidade'], FALSE);
        $this->db->where('produtoID', $produto['produtoID']);
        $this->db->where('quantidade >=', $produto['quantidade']);
        $this->db->update('estoque');

        return $this->db->update_id();
    }
}