<?php
    class Excluir extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            
            $id = $this->uri->segment(3);

            $this->load->model('Comanda/ExcluirComanda');
            $this->ExcluirComanda->comanda($id);

            $this->load->model('listagem/Listar');
            $dados['dados'] = $this->Listar->listarComandas();

            $this->load->view('comum/navBar', $dados);
            $this->load->view('comum/listagem');
            $this->load->view('comum/footer');
        }

    }
?>