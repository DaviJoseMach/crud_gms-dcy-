<?php
// Configurações para a conexão com o banco de dados
$host = "localhost"; // Host do banco de dados (normalmente "localhost" se estiver rodando localmente)
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "dcy_oficial"; // Nome do banco de dados

// Realiza a conexão com o banco de dados
$mysqli = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

// Define o conjunto de caracteres para UTF-8 (opcional, dependendo da configuração do seu banco de dados)
$mysqli->set_charset("utf8");
?>
