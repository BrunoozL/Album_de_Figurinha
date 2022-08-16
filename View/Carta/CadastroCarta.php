<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Menu</title>
    <style>
    h1{
        color: white;
    }

    body{
        background-color: #8B8989;
    }

    .btn-outline-info{
        padding: 10px;
        font-size: 40px;
        background-color: #363636;
        width: 400px;
        height: 80px;
        border: 2px #1C1C1C solid;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
    }

        label{
            color: #9C9C9C;
        }
        label, input { display: block;}
    </style>
</head>
<body>
<center>
    <form action="/carta/save" method="post">
        <fieldset>
            <h1>Cadastro de Carta</h1>
            <hr>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

            <label for="idade">Idade:</label>
            <input name="idade" id="idade" value="<?= $model->idade ?>" type="number" />

            <label for="posicao">Posicão</label>
            <input name="posicao" id="posicao" value="<?= $model->posicao ?>" type="text" />

            <label for="nivel">Nivel</label>
            <input name="nivel" id="nivel" value="<?= $model->nivel ?>" type="text" />

            <label for="id_selecao">Seleção</label>
            <input name="id_selecao" id="id_selecao" value="<?= $model->id_selecao ?>" type="text" />
            <br>
            <button class="btn btn-outline-info">Enviar</button>

        </fieldset>
    </form>  
    </center>  
</body>
</html>