<?php

$dbHost = 'localhost'; 
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'Form_login';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
} else {
    echo "A conexão foi realizada com sucesso.";
}

?>
