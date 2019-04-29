<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Buscar extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function index($dados){
            $sql = 'SELECT id, email, login 
                    FROM administrador  
                    WHERE login = "' . $dados['login'] . 
                    '" AND senha = "' . $dados['senha'] . '";';

            return $this->db->query($sql);
        }
    }