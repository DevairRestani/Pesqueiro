<?php

class BuscaCompras extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $idComanda = $this->uri->segment(3);
        $comanda['nome'] = $this->input->post('NomeProprietario');
        $i = 0;
        $j = 0;
        if($this->input->post('produto_'.$i) != null){

            $this->load->model('Estoque/Editar');
            $this->load->model('Comanda/EditarComanda');

            while($this->input->post('produto_'.$i) !== null){

                $produto['produtoID'] = intval($this->input->post('produto_'.$i));
                $produto['quantidade'] = intval($this->input->post('qtd_'.$i));

                

                if($this->Editar->baixaEstoque($produto) == true){
                    $this->editarComanda->AlterarComanda($idComanda, $produto['produtoID'], $comanda, );
                    

                }else{
                    $erros[$j] = $produto['produtoID'];
                    $j++;
                }

                $i++;
            }
        }
        
    }
}