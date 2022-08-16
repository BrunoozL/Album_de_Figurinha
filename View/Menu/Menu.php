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
        font-family: 'Mansalva', cursive;
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
    
</style>
  </head>
  <body>
      <center>
        <hr>
        <hr>
        <h1>Menu</h1>
        <hr>
        <hr>

        <img src="Imagens/capa.jpg" height="350" width="700" style="border:1px solid black">
        <br>
        <br>

        <form action="/cadastro" method="post">
        <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark">Cadastro</button>
        </form>
        <br>
        <br>

        <form action="/lista" method="post">
        <button class="btn btn-dark">Lista</button>
        </form>
        </div>



      </center>
    </body>
</html>