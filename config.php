<?php
session_start();
$scriptRoot = explode('/', str_replace('_class', '', __DIR__));
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
$arrayCaminho = array_intersect($scriptRoot, $scriptName);

$complementoPasta = '';
if (count($arrayCaminho) > 0) {
    foreach ($arrayCaminho as $pasta) {
        if (!empty($pasta)) {
            $complementoPasta .= $pasta . '/';
        }
    }
}
define('URL_SYS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' . $complementoPasta);
define('PATH_DEFAULT', URL_SYS);

define('SESSION_NAME', 'pp_super_credito');

require '_class/header.class.php'; 
require '_class/footer.class.php'; 
require '_class/sidebar.class.php'; 
require '_class/indicadores.class.php'; 
require '_class/gformparent.class.php';
require 'helper/form.class.php'; 