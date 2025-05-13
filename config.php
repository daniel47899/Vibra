<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbnome = 'db_vibra';

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbnome);

if ($conn->connect_error) {
    echo "Erro na conexão: " . $conn->connect_error;
} else {
    //echo "Conectado com sucesso!";//
}
?>
