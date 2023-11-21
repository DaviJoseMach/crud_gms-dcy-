<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar ao banco de dados (substitua com suas informações)
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dcy_oficial";

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Recuperar dados do formulário
    $email = $conexao->real_escape_string($_POST['email']);
    $usuario = $conexao->real_escape_string($_POST['usuario']);
    $senha = password_hash($conexao->real_escape_string($_POST['senha']), PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO registro (email, usuario, senha) VALUES ('$email', '$usuario', '$senha')";

    if ($conexao->query($sql) === true) {
        // Registro bem-sucedido, redirecionar para a página de login
        header("Location: login.php");
        exit;
    } else {
        echo "Erro ao registrar: " . $conexao->error;
    }

    $conexao->close();
}
?>
