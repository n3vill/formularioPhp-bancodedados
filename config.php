<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword= "1234";
$dbname = "cadastro-formulario";

$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

// if($conexao -> connect_errno) {
//     echo "Tem erro ai, viu?!";
// } 

// else {
//     echo "Conexão bem sucedida";
// }

?>