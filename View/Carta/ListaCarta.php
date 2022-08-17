<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Carta</title>
    <style>
    h1{
        color: white;
    }

    body{
        background-color: #8B8989;
    }

    table, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        color: white;
        font-size: 30px;
    }

    th{
        border: 1px solid black;
        background-color: #754333;
        text-align: center;
        color: black;
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
</style>
</head>
<body>
<center>
    <hr>
    <hr>
<h1>Lista de Carta</h1>
    <hr>
    <hr>
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Posição</th>
            <th>Nivel</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td> <a href="/carta/delete?id=<?= $item['id'] ?>">X</a> </td>
            <td><?= $item['id'] ?></td>
            <td> <a href="/carta/cadastro?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a> </td>
            <td><?= $item['idade'] ?></td>
            <td><?= $item['posicao'] ?></td>
            <td><?= $item['nivel'] ?></td>

        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
        <br>
        <br>
        <br>
    <form action="/menu" method="post">
        <button class="btn btn-dark">Menu</button>
    </form>
    </center>
</body>