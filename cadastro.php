<?php

    if(isset($_POST['submit']))
    {
    //     print_r(($_POST['aluno']));
    //     print_r('<br>');
    //     print_r(($_POST['cidade']));
    //     print_r('<br>');
    //     print_r(($_POST['matricula']));

    include_once('config.php');

    $aluno = $_POST['aluno'];
    $cidade= $_POST['cidade'];
    $matricula= $_POST['matricula'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(aluno,cidade,matricula)
    VALUES ('$aluno','$cidade','$matricula')");
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Cadastro</h1>
        
        <form action="cadastro.php" method="POST">
            <div class="mb-3">
                <label for="aluno" class="form-label">Aluno(a)</label>
                <input type="text" class="form-control" name="aluno">
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula</label>
                <input type="text" class="form-control" name="matricula">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
  </body>
</html>


