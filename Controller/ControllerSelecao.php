<?php

class ControllerSelecao
{

    public static function index()
    {
        include 'Model/ModelSelecao.php';
        $model = new ModelSelecao();
        $model -> getAllRows();
        include 'View/ListaSelecao.php';
    }

    public static function cadastro()
    {
        include 'Model/ModelSelecao.php';
        $model = new ModelSelecao();
        
        if(isset($_REQUEST['id']))
            $model = $model -> getById((int) $_REQUEST['id']);
        include 'View/Cadastro.php';
    }

    public static function save()
    {
        include 'Model/ModelSelecao.php';

        $carta = new ModelSelecao();
        $carta -> id = $_POST['id'];
        $carta -> nome = $_POST['nome'];
        $carta -> serie = $_POST['serie'];

        $carta -> save();
        header("Location: /selecao");
    }

    public static function delete()
    {
        include 'Model/ModelSelecao.php';

        $model = new ModelSelecao();
        $model -> delete ((int) $_GET['id']);
        header("Location: /selecao");
    }
}
?>