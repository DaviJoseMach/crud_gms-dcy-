<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['usuario'])) {
    // Conectar ao banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dcy_oficial";

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Recuperar dados do formulário
    $id = $conexao->real_escape_string($_POST['id']);
    $status = $conexao->real_escape_string($_POST['status']);
    $nome = $conexao->real_escape_string($_POST['nome']);
    $fabricante = $conexao->real_escape_string($_POST['fabricante']);
    $tipo = $conexao->real_escape_string($_POST['tipo']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);

    // Atualizar produto no banco de dados
    $sql = "UPDATE produtos SET status='$status', nome='$nome', fabricante='$fabricante', tipo='$tipo', quantidade=$quantidade WHERE id=$id";
    
    if ($conexao->query($sql) === true) {
        echo "<script>alert('Produto atualizado com sucesso!'); window.location='visualizar.php';</script>";
        exit;
    } else {
        echo "<script>alert('Erro ao atualizar produto: " . $conexao->error . "'); window.location='visualizar.php';</script>";
        exit;
    }

    $conexao->close();
} else {
    // Redirecionar para página de login se não estiver autenticado
    header("Location: visualizar.php");
    exit;
}
?>
