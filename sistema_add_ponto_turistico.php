<?php

include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $tipo=$_POST['tipo'];
    $endereco=$_POST['endereco'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $hora_abertura=$_POST['horario_abertura'];
    $hora_fechamento=$_POST['horario_fechamento'];
    $taxaentrada=$_POST['taxaentrada'];
    
    
    
    $sql = "INSERT INTO ponto_turistico (nome, descricao, tipo, endereco, latitude, longitude, horario_abertura, horario_fechamento, taxaentrada,)
        VALUES ('$nome', '$descricao', '$tipo', '$endereco', '$latitude', '$longitude', ' $hora_abertura','$hora_fechamento', '$taxaentrada',)";

    
    if (mysqli_query($conn, $sql)) {
      echo "$nome cadastrado com sucesso!";
  } else {
      echo "Erro ao cadastrar: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Ponto Turístico</title>
</head>
<body>

<h2>Cadastro de Ponto Turístico</h2>
<form action="#" method="post">
    <label for="nome">Nome do Ponto Turístico:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="descricao">Descrição:</label><br>
    <textarea id="descricao" name="descricao" rows="4" required></textarea><br><br>

    <label for="tipo">Tipo:</label><br>
    <input type="text" id="tipo" name="tipo" required><br><br>

    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco" required><br><br>

    <label for="latitude">Latitude:</label><br>
    <input type="number" id="latitude" name="latitude" step="any" required><br><br>

    <label for="longitude">Longitude:</label><br>
    <input type="number" id="longitude" name="longitude" step="any" required><br><br>
    
    <label for="horario_abertura">Horário de Abertura:</label><br>
    <input type="time" id="horario_abertura" name="horario_abertura" required><br><br>

    <label for="horario_fechamento">Horário de Fechamento:</label><br>
    <input type="time" id="horario_fechamento" name="horario_fechamento" required><br><br>

    <label for="taxa">Taxa de Entrada (R$):</label><br>
    <input type="number" id="taxa" name="taxaentrada" step="0.01" required><br><br>

    <label for="id_cidade">Cidade:</label><br>
    <select name="id_cidade" required>
        <?php
        
        $query = "SELECT id, nome FROM cidade";
        $result = mysqli_query($conn, $query);

        
        while ($cidade = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $cidade['id'] . "'>" . $cidade['nome'] . "</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>