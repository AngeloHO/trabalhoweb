<?php
header('Content-Type: application/json');

include 'conexao.php';

$conn = getConnection();

$sql = "SELECT USU_ID, USU_NOME, USU_EMAIL, USU_NOME_COMPLETO, USU_ENDERECO, USU_TELEFONE, USU_STATUS, USU_DATA_CADASTRO FROM TB_USUARIO WHERE USU_STATUS = 'A'";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    // Altera o status para "ATIVO" ou "INATIVO"
    if ($row['USU_STATUS'] == 'A') {
        $row['USU_STATUS'] = 'ATIVO';
    } else {
        $row['USU_STATUS'] = 'INATIVO';
    }

    $data[] = $row;
}

echo json_encode(array('data' => $data));

$conn->close();
?>