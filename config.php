<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbnome = 'bd_vibecultural';

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbnome);

if ($conn->connect_error) {
    echo "Erro na conexão: " . $conn->connect_error;
} else {
    //echo "Conectado com sucesso!";//
}
?>
