<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Defalt';
$route['home'] = 'Inicio/Home';
$route['estoque'] = 'Estoque/Detalhes';
$route['produto/adicionar'] = 'Estoque/Criar';
$route['produto/salvar'] = 'Estoque/Criar/Salvar';
$route['comanda/criar'] = 'Comanda/Criar';
$route['comanda/editar/:num'] = 'Comanda/Editar';
$route['comanda/salvar'] = 'Comanda/Criar/Salvar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = "login/Verificar";
$route['ajax'] = 'Produto/Ajax/receberObjetos';