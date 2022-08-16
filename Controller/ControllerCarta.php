<?php

class ControllerCarta
{

    public static function index()
    {
        include 'Model/ModelCarta.php';
        $model = new ModelCarta();
        $model -> getAllRows();
        include 'View/ListaCarta.php';
    }

    public static function cadastro()
    {
        include 'Model/ModelCarta.php';
        $model = new ModelCarta();
        
        if(isset($_REQUEST['id']))
            $model = $model -> getById((int) $_REQUEST['id']);
        include 'View/CadastroView.php';
    }

    public static function save()
    {
        include 'Model/Model.php';

        $carta = new ModelCarta();
        $carta -> id = $_POST['id'];
        $carta -> nome = $_POST['nome'];
        $carta -> idade = $_POST['idade'];
        $carta -> posicao = $_POST['posicao'];
        $carta -> nivel = $_POST['nivel'];
        $carta -> selecao = $_POST['selecao'];

        $carta -> save();
        header("Location: /carta");
    }

    public static function delete()
    {
        include 'Model/Model.php';

        $model = new ModelCarta();
        $model -> delete ((int) $_GET['id']);
        header("Location: /carta");
    }
}
?>