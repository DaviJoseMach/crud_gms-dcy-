<?php
// Verificar se o ID foi enviado por meio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_digitado = $_POST['id'];
    // Verificar se o ID digitado é igual a 333
    if ($id_digitado == 333) {
        // ID correto, permitir acesso à página
        // Continuar com o restante do conteúdo da página
    } else {
        // ID incorreto, redirecionar para a página inicial
        echo "<script>alert('ID incorreto!'); window.location='index.html';</script>";
        exit;
    }
} else {
    // Mostrar caixa de diálogo para digitar o ID
    echo "<script>
            var idDigitado = prompt('Digite seu ID:');
            if (idDigitado !== '333') {
                alert('ID incorreto! Você será redirecionado para a página inicial.');
                window.location='index.html';
            }
         </script>";
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Produtos</title>

    <style>
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/back2.png');
}

nav {
    background-color: #007bff;
    padding: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.521); /* Aumenta a sombra ao passar o mouse */
    width: 100%;
    position: fixed;
    top: 0;
    display: flex;
    justify-content: center; /* Centraliza os itens horizontalmente */
    align-items: center; /* Centraliza os itens verticalmente */
}

nav a {
    color: white;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px; /* Espaço entre os itens do menu */
    transition: transform 0.5s ease-in-out; /* Adiciona uma transição suave de 0.3 segundos */
    font-weight: bold; /* Adiciona negrito ao texto */
}

nav a:hover {
    text-decoration: underline;
    transform: scale(1.1); /* Aumenta a escala ao passar o mouse */
}


nav a:first-child {
    font-size: 20px;
    margin-right: auto; /* Move o primeiro item para a esquerda */
}

nav a:last-child {
    margin-left: auto; /* Move o último item para a direita */
}



table {
    width: 80%;
    margin: 80px auto 20px; /* Ajuste a margem superior para evitar sobreposição com o menu */
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}


    </style>
</head>

<body>




    <nav>
        <a href="#">PAINEL ADM</a>
        <a href="index.html">Home</a>
        <a href="add.php">Adicionar Produto</a>
        <a href="edit.php">Editar Produto</a>
        <a href="excluir.php">Excluir Produto</a>
    </nav> <br> <br> <br> <br><br> <br>

    <?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "dcy_oficial";

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    function obterTodosOsProdutosDoBancoDeDados()
    {
        global $conexao;

        $sql = "SELECT * FROM produtos";
        $resultado = $conexao->query($sql);

        $produtos = [];

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $produtos[] = $row;
            }
        }

        return $produtos;
    }

    $produtos = obterTodosOsProdutosDoBancoDeDados();

    if ($produtos) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Fabricante</th><th>Tipo</th><th>Quantidade</th></tr>";

        foreach ($produtos as $produto) {
            echo "<tr>";
            echo "<td>{$produto['id']}</td>";
            echo "<td><strong>{$produto['nome']}</strong></td>";
            echo "<td>{$produto['fabricante']}</td>";
            echo "<td>{$produto['tipo']}</td>";
            echo "<td>{$produto['quantidade']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum produto encontrado.</p>";
    }
    ?>

<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "dcy_oficial";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

function obterTodosOsUsuariosDoBancoDeDados()
{
    global $conexao;

    $sql = "SELECT * FROM registro";
    $resultado = $conexao->query($sql);

    $usuarios = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }

    return $usuarios;
}

$usuarios = obterTodosOsUsuariosDoBancoDeDados();

if ($usuarios) {
    echo "<table>";
    echo " <tr><th>ID</th><th>Nome de Usuário</th><th>Email</th></tr>";

    foreach ($usuarios as $usuario) {
        echo "<tr>";
        echo "<td>{$usuario['id']}</td>";
        echo "<td><strong>{$usuario['usuario']}</strong></td>";
        echo "<td>{$usuario['email']}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum usuário encontrado.</p>";
}
?>


</body>

</html>