<?php
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'web';

function getConnection()
{
    global $host, $db_user, $db_password, $db_name;
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    if (!$conn) {
        die("Erro de conexão: " . mysqli_connect_error());
    }

    return $conn;
}
?>