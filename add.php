<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style/gr.css"> <!-- Inclui um arquivo de estilo se necessário -->
</head>
<body>
    <!-- Formulário para adicionar um novo produto -->
    <form action="add_produto.php" method="post">
        <!-- Campo de entrada para o nome do produto -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <!-- Campo de entrada para o fabricante do produto -->
        <label for="fabricante">Fabricante:</label>
        <input type="text" name="fabricante" required>
        <br><br>

        <!-- Lista suspensa para selecionar o tipo do produto -->
        <label for="tipo">Tipo:</label>
        <select name="tipo" required>
            <option value="PC">PC</option>
            <option value="Game">Game</option>
            <option value="Console">Console</option>
        </select>
        <br><br>

        <!-- Campo de entrada para a quantidade do produto -->
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br><br>

        <!-- Botão de envio do formulário -->
        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>
