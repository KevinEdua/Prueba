<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Tablero';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['inicio'] = 'Tablero/index';
$route['login'] = 'Usuario';
$route['logout'] = 'Usuario/salir';

//CATALOGOS
$route['catalogos'] = 'catalogos';
$route['catalogos/usuarios'] = 'Usuario/listado';
$route['catalogos/usuarios/tipos'] = 'Usuario_tipo';
$route['catalogos/usuarios/tipos/nuevo'] = 'Usuario_tipo/nuevo';
$route['catalogos/usuarios/tipos/editar'] = 'Usuario_tipo/editar';
$route['catalogos/usuarios/tipos/eliminar'] = 'Usuario_tipo/eliminar';
