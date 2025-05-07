<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $data_inicio=$_POST['data_inicio'];
    $data_fim=$_POST['data_fim'];
    $hora_inicio=$_POST['hora_inicio'];
    $hora_fim=$_POST['hora_fim'];
    $local_evento=$_POST['local_evento'];
    $tipo=$_POST['tipo'];
    $taxaentrada=$_POST['taxaentrada'];
    $id_cidade=$_POST['id_cidade'];

    // Corrigindo a query de inserção
    $sql = "INSERT INTO evento_cultural (nome, descricao, data_inicio, data_fim, hora_inicio, hora_fim, local_evento, tipo, taxaentrada, id_cidade)
            VALUES ('$nome', '$descricao', '$data_inicio', '$data_fim', '$hora_inicio', '$hora_fim', '$local_evento', '$tipo', '$taxaentrada', '$id_cidade')";

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
    <title>Cadastro de Evento Cultural</title>
</head>
<body>

<h2>Cadastro de Evento Cultural</h2>
<form action="#" method="post">
    <label for="nome">Nome do Evento Cultural:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="descricao">Descrição:</label><br>
    <textarea id="descricao" name="descricao" rows="4" required></textarea><br><br>

    <label for="data_inicio">Data de Início:</label><br>
    <input type="datetime-local" id="data_inicio" name="data_inicio" required><br><br>

    <label for="data_fim">Data de Fim:</label><br>
    <input type="datetime-local" id="data_fim" name="data_fim" required><br><br>

    <label for="hora_inicio">Hora de Início:</label><br>
    <input type="time" id="hora_inicio" name="hora_inicio" required><br><br>

    <label for="hora_fim">Hora de Fim:</label><br>
    <input type="time" id="hora_fim" name="hora_fim" required><br><br>

    <label for="local_evento">Local do Evento:</label><br>
    <input type="text" id="local_evento" name="local_evento" required><br><br>

    <label for="tipo">Tipo de Evento:</label><br>
    <input type="text" id="tipo" name="tipo" required><br><br>

    <label for="taxaentrada">Taxa de Entrada (R$):</label><br>
    <input type="number" id="taxaentrada" name="taxaentrada" step="0.01" required><br><br>

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
