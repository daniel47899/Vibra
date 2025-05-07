<?php
include('config.php');

if($_SERVER['REQUEST_METHOD']== "POST") {

    $nome=$_POST['nome'];
    $estado=$_POST['estado'];
    $pais=$_POST['pais'];
    $descricao=$_POST['descricao'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];

    $sql="INSERT INTO `cidade`(`nome`, `estado`, `pais`, `descricao`, `latitude`, `longitude`)
            VALUES ('$nome','$estado','$pais','$descricao','$latitude','$longitude')";
    
    if(mysqli_query($conn, $sql)){
        echo "$nome Cadastrado com sucesso!";
    } else{
        echo "Erro ao Cadastrar" . mysqli_error($conn);
    
        }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Cidade</title>
</head>
<body>

  <h2>Cadastro de Cidade</h2>
  <form action="#" method="post">
    <label for="nome">Nome da Cidade:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="estado">Estado:</label><br>
    <input type="text" id="estado" name="estado" required><br><br>

    <label for="pais">País:</label><br>
    <input type="text" id="pais" name="pais" required><br><br>

    <label for="descricao">Descrição:</label><br>
    <textarea id="descricao" name="descricao" rows="4"></textarea><br><br>

    <label for="latitude">Latitude:</label><br>
    <input type="number" id="latitude" name="latitude" step="any" required><br><br>

    <label for="longitude">Longitude:</label><br>
    <input type="number" id="longitude" name="longitude" step="any" required><br><br>

    <button type="submit">Cadastrar</button>
  </form>

</body>
</html>
