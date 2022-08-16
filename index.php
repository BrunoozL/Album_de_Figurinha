<?php
$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/ControllerCarta.php';
include 'Controller/MenuController.php';

switch ($uri_parse)
{
    case '/cadastro/carta':
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

    case '/cadastro/selecao':
        ControllerSelecao::cadastro();
    break;

    case '/selecao/save':
        ControllerSelecao::save();
    break;

    case '/selecao';
        ControllerSelecao::index();
    break;

    case '/selecao/delete';
        ControllerSelecao::delete();
    break;
    
    default;
        MenuController::menu();
    break;
}
?>