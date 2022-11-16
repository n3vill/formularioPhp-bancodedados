<?php
include_once('config.php');

$sql = "SELECT * FROM listaalunos ORDER BY id DESC";

$result = $conexao -> query($sql);

// print_r($result);

?>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class= "container mb-3">
    <h1>Alunos</h1>
    <hr>

<table class="table table-striped table-hover">
<thead class="table-dark">
        <tr>
            <th>Aluno</th>
            <th>Cidade</th>
            <th>Matricula</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($result as $cadaAluno) {
                echo "<tr>
                    <td>{$cadaAluno['aluno']}</td>
                    <td>{$cadaAluno['cidade']}</td>
                    <td>{$cadaAluno['matricula']}</td>
                </tr>";
            }
        ?>
    </tbody>
</table>  
</div>