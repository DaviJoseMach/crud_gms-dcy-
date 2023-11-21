<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    $usuario = $conexao->real_escape_string($_POST['username']);
    $senha = $conexao->real_escape_string($_POST['password']);

    // Consultar o banco de dados para verificar o usuário
    $sql = "SELECT * FROM registro WHERE usuario='$usuario'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        // Usuário encontrado, verificar a senha
        $row = $resultado->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Senha correta, redirecionar para a página da loja
            $_SESSION['usuario'] = $usuario;
            echo "<script>alert('Login bem-sucedido!'); window.location='loja.php';</script>";
            exit;
        } else {
            echo "<script>alert('Senha incorreta!'); window.location='login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Nome de usuário não encontrado!'); window.location='login.php';</script>";
        exit;
    }
    

    $conexao->close();
}
?>
