<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
    <link rel="stylesheet" href="style/ex.css"> <!-- Se você tiver um arquivo de estilo, adicione aqui -->
</head>
<body>
    <form action="excluir_produto.php" method="post">
        <label for="id">ID do Produto:</label>
        <input type="text" name="id" required>
        <br><br>

        <input type="submit" value="Excluir Produto">
    </form>
</body>
</html>
