<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["inicio"] = "inicio";
$route["tipodocumentos"] = "basicos/tpdocumentos";
$route["tipopagos"] = "basicos/tppagos";
$route["tipousuarios"] = "basicos/tpusuarios";
$route["tipovehiculos"] = "basicos/tpvehiculos";
$route["tipomascotas"] = "basicos/tpmascotas";
$route["visitantes"] = "visitantes";
$route["visitantes/buscar"] = "visitantes/searchvisitante";
$route["visitantes/crear"] = "visitantes/insertvisitantes";
$route["bloques"] = "basicos/bloques";
$route["apartamentos"] = "apartamentos";
$route["apartamentos/registrar"] = "apartamentos/insertapartament";
$route["pqrs"] = "pqrs";
$route["gastos"] = "gastos";
$route["pagos"] = "pagos";
$route["trasteos"] = "trasteos";
$route["clasificados"] = "clasificados";
$route["propietarios"] = "propietarios";
$route["arrendatarios"] = "arrendatarios";
$route["postventa"] = "postventa";
$route["consultas"] = "consultas";
$route["tablero"] = "tablero";
$route["tablero2"] = "tablero/tablero2";
$route["preguntas"] = "tablero/questionasamblea";
$route["multas"] = "multas";
//login
$route["login"] = "login/loginadmin";
$route["logout"] = "login/logout";

//Inicio
$route["admnistracion/actualizar/usuario"] = "inicio/updateadminuser";

//propietarios
$route["propietarios/buscar"] = "propietarios/searchpropietario";
$route["propietarios/guardar"] = "propietarios/savepropietario";

//gastos
$route["gastos/guardar"] = "gastos/savegastos";

//Pagos
$route["pagos/buscar"] = "pagos/searchpayments";
$route["pagos/guardar"] = "pagos/savepagos";
$route["pagos/documento"] = "pagos/generardocumentopago";

//trasteos
$route["trasteos/guardar"] = "trasteos/savetrasteos";
$route["trasteos/documento"] = "trasteos/cargardocumento";

//Arrendatarios
$route["arrendatarios/guardar"] = "arrendatarios/savearrendatarios";

//pqrs
$route["pqrs/buscar"] = "pqrs/searchpqrs";
$route["pqrs/guardar"] = "pqrs/responderpqrs";

//tablero 
$route["tablero/contarsi"] = "tablero/countamountsi"; 
$route["tablero/contarno"] = "tablero/countamountno"; 
$route["tablero/contarblanco"] = "tablero/countamountblanco";

//tablero multiple
$route["tablero/contarrespuesta1"] = "tablero/contarrespuesta1"; 
$route["tablero/contarrespuesta2"] = "tablero/contarrespuesta2"; 
$route["tablero/contarrespuesta3"] = "tablero/contarrespuesta3"; 
$route["tablero/contarrespuesta4"] = "tablero/contarrespuesta4"; 
$route["tablero/contarrespuesta5"] = "tablero/contarrespuesta5"; 

//multas
$route["multas/buscar"] = "multas/searchmultas";