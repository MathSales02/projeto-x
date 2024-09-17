<?php


$DBservidor = "localhost";
$DBusuario = "root";
$DBsenha = "";
$DBbanco = "projeto-x";

// Conectar ao banco de dados
$conn = mysqli_connect($DBservidor, $DBusuario, $DBsenha, $DBbanco);

// Verificar a conexão
if (mysqli_connect_errno()) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Definir o conjunto de caracteres
mysqli_set_charset($conn, "utf8");

// Opcional: verificar se a configuração foi aplicada corretamente
$charset = mysqli_character_set_name($conn);
if ($charset !== "utf8") {
    echo "Aviso: O conjunto de caracteres não é UTF-8, mas $charset.";
}
