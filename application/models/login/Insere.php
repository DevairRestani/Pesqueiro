<?php
    class Insere extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function index(){
            // $dados;

            // $dados['login'] = 'admin@admin.com.br';
            // $dados['senha'] = sha1('123456');

            // $this->db->insert('administrador', $dados);
        }
    }