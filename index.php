<?php
$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/ControllerCarta.php';
include 'Controller/MenuController.php';

switch ($uri_parse)
{
    case '/cadastro':
        ControllerCarta::cadastro();
    break;

    case '/cadastro/save':
        ControllerCarta::save();
    break;

    case '/carta';
        ControllerCarta::index();
    break;

    case '/carta/delete';
        ControllerCarta::delete();
    break;
    
    default;
        MenuController::menu();
    break;
}
?>