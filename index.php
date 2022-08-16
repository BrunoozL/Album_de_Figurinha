<?php
$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/ControllerCarta.php';
include 'Controller/MenuController.php';
include 'Controller/ControllerSelecao.php';


switch ($uri_parse)
{
    //carta
    case '/carta/cadastro':
        ControllerCarta::cadastro();
    break;

    case '/carta/save':
        ControllerCarta::save();
    break;

    case '/carta';
        ControllerCarta::index();
    break;

    case '/carta/delete';
        ControllerCarta::delete();
    break;



    //seleção
    case '/selecao/cadastro':
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


    
    //menu
    case '/cadastro':
        CadastroController::cadastro();
    break;
    
    case '/lista':
        ListaController::lista();
    break;
    
    default;
        MenuController::menu();
    break;
}
?>