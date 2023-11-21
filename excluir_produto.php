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

    // Recuperar ID do produto a ser excluído
    $id = $conexao->real_escape_string($_POST['id']);

    // Excluir produto do banco de dados
    $sql = "DELETE FROM produtos WHERE id=$id";
    
    if ($conexao->query($sql) === true) {
        echo "<script>alert('Produto excluído com sucesso!'); window.location='visualizar.php';</script>";
        exit;
    } else {
        echo "<script>alert('Erro ao excluir produto: " . $conexao->error . "'); window.location='visualizar.php';</script>";
        exit;
    }

    $conexao->close();
} else {
    // Redirecionar para página de login se não estiver autenticado
    header("Location: visualizar.php");
    exit;
}
?>
