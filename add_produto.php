<?php
// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Configurações de conexão com o banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dcy_oficial";

    // Estabelece a conexão com o banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Obtém os valores do formulário, protegendo contra SQL injection
    $nome = $conexao->real_escape_string($_POST['nome']);
    $fabricante = $conexao->real_escape_string($_POST['fabricante']);
    $tipo = $conexao->real_escape_string($_POST['tipo']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);

    // Monta a consulta SQL para inserir um novo produto
    $sql = "INSERT INTO produtos (nome, fabricante, tipo, quantidade) VALUES ('$nome', '$fabricante', '$tipo', '$quantidade')";

    // Executa a consulta SQL e verifica se foi bem-sucedida
    if ($conexao->query($sql) === true) {
        echo "Produto adicionado com sucesso!";
            // Redirecionar para página de login se não estiver autenticado
            header("Location: visualizar.php");
            exit;
    } else {
        echo "Erro ao adicionar produto: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
