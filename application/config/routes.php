<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Defalt';
$route['home'] = 'Inicio/Home';
$route['estoque'] = 'Estoque/Detalhes';
$route['estoque/editar/:num'] = 'Estoque/Editar';
$route['produto/alterar'] = 'Estoque/Editar/alterar';
$route['produto/adicionar'] = 'Estoque/Criar';
$route['estoque/excluir/:num'] = 'Estoque/excluir';
$route['produto/salvar'] = 'Estoque/Criar/Salvar';
$route['comanda/criar'] = 'Comanda/Criar';
$route['comanda/editar/:num'] = 'Comanda/Editar';
$route['comanda/alterar/:num'] = 'Comanda/Alterar';
$route['comanda/salvar'] = 'Comanda/Criar/Salvar';
$route['comanda/excluir/:num'] = 'Comanda/Excluir';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = "login/Verificar";
$route['ajax'] = 'Produto/Ajax/receberObjetos';