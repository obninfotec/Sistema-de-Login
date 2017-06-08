<?php
header('Content-Type: text/html; charset=utf-8');

define("DIR", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);
define("LOCAL", 'http://obnloja/');
define("ESTILO", 'Assets/Css/');
define("JQUERY", 'Assets/Jquery/3.2.1/');
define("IMG", 'Assets/Imagens/');

$Include = DIR . DS . 'App' . DS . 'Loader.php';
include_once $Include;

$Loader = new App\Loader();
$Loader->Register();

//$Controller = new App\Mvc\Controller();
//$Controller->Index();

$Page = isset($_GET['page']) ? $_GET['page'] : '';
$Action = isset($_GET['action']) ? $_GET['action'] : 'Index';

switch ($Page) {
    case 'cart' :
        $Cart = new App\Controller\Cart();
        call_user_func_array(array($Cart, $Action), array());
        break;

    default :
        $Home = new App\Controller\Home($ProductRepository);
        call_user_func_array(array($Home, $Action), array());
}
