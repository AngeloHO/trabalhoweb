<?php
session_start();
include 'conexao.php'; // Inclua o arquivo que contém a função getConnection()

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['nomeCompleto']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['status'])) {
    // Recebe os dados enviados via POST
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nomeCompleto = $_POST['nomeCompleto'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $status = $_POST['status'];

    $conn = getConnection();

    $sql = "UPDATE TB_USUARIO SET USU_NOME=?, USU_EMAIL=?, USU_NOME_COMPLETO=?, USU_ENDERECO=?, USU_TELEFONE=?, USU_STATUS=? WHERE USU_ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $email, $nomeCompleto, $endereco, $telefone, $status, $id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Erro ao atualizar usuário.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Dados do formulário não enviados.";
}
?>