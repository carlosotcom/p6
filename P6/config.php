<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

$title = 'Admin Panel Calendario Asignaturas';      // Título de la página

define('CONT','controller/');
define('MOD','model/');
define('VIEW','view/');

define('CSS','public/css/style.css');
define ('IMG', 'public/img/');

define('HOST_DB', 'localhost'); // host o servidor
define('USER_DB', 'root'); // usuario de la base de datos
define('PASS_DB', ''); // contraseña de la base de datos
define('NAME_DB', 'basedatos'); // nombre de la base de datos

