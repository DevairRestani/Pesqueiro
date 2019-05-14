<?php
class ExcluirEstoque extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function estoque($id){
        $this->db->where('produtoID', $id);
        $this->db->join('produtos', 'estoque.produtoID = produtos.id');
        $this->db->delete('estoque');
    } 

}