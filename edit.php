<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style/edit.css"> <!-- Se você tiver um arquivo de estilo, adicione aqui -->
</head>

<body>


    <form action="edit_produto.php" method="post">
        <label for="id">ID do Produto:</label>
        <input type="text" name="id" required>
        <br><br>

        <label for="nome">Novo Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label for="fabricante">Novo Fabricante:</label>
        <input type="text" name="fabricante" required>
        <br><br>

        <label for="tipo">Novo Tipo:</label>
        <select name="tipo" required>
            <option value="PC">PC</option>
            <option value="Game">Game</option>
            <option value="Console">Console</option>
        </select>
        <br><br>

        <label for="quantidade">Nova Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br><br>

        <input type="submit" value="Editar Produto">
    </form>
</body>

</html>