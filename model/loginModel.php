<?php
include_once 'conexao.php';

// Receber dados de entrada
$login = $_POST['user'];
$pass = $_POST['pass'];

// Preparar a consulta SQL
$sql = $conn->prepare("SELECT * FROM userlogin WHERE email = ?  AND senha = ?");
if ($sql === false) {
    die('Erro ao preparar a consulta: ' . $conn->error);
}

// Vincular parâmetros
$sql->bind_param("ss", $login, $pass);

// Executar a consulta
$sql->execute();
$result = $sql->get_result();

// Buscar os dados
$linha = $result->fetch_assoc();

// Fechar a consulta e a conexão
$sql->close();
$conn->close();

// Verificar resultado
if (empty($linha)) {
    echo "falhaLogin";
} else {
    // Definir variáveis de sessão
 
    $_SESSION['email'] = $linha['email'];
    $_SESSION['senha'] = $linha['senha'];


    // Verificar tipo de usuário
    switch ($linha['type']) {
        case "administrador":
            echo "SucessoADM";
            break;
        case "funcionario":
            echo "SucessoFuncionario";
            break;
        case "usuario":
            echo "SucessoUsuario";
            break;
        default:
            echo "falhaLogin";
            break;
    }
}


