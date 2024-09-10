<?php
session_start(); 
include 'conexao.php'; 

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = getConnection();

    $sql = "SELECT USU_ID, USU_NOME, USU_SENHA FROM TB_USUARIO WHERE USU_EMAIL = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

       
        if ($password === $user['USU_SENHA']) {
            $_SESSION['usuario_id'] = $user['USU_ID'];
            $_SESSION['usuario_nome'] = $user['USU_NOME'];

            echo "success";
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Dados do formulário não enviados.";
}
?>