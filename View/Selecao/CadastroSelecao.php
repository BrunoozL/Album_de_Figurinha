<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Menu</title>
    <style>
    h1{
        color: white;
    }

    body{
        background-color: #8B8989;
    }

    .btn-dark{
        font-size: 25px;
        background-color: #363636;
        width: 150px;
        height: 60px;
        border: 2px #1C1C1C solid;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
    }

        label{
            color: black;
        }
        label, input { display: block;}
    </style>
</head>
<body>
<center>
    <form action="/selecao/save" method="post">
        <fieldset>
            <hr>
            <hr>
            <h1>Cadastro de Seleção</h1>
            <hr>
            <hr>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

            <label for="serie">Série:</label>
            <input name="serie" id="serie" value="<?= $model->serie ?>" type="text" />
            <br>

            <button class="btn btn-dark">Enviar</button>

        </fieldset>
    </form>  
    </center>  
</body>
</html>