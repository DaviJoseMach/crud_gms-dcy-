<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/back2.png');
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .thank-you-box {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
        }

        input[type="button"] {
    width: 100%;
    background-color: white;
    color: #785FEE;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.5s ease, transform 0.4s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

input[type="button"]:hover {
    background-color: #433585;
    transform: scale(1.05); /* Aumentando o tamanho em 5% (zoom) */
    color: white;
}
    </style>
</head>
<body>
    <div class="thank-you-box">
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $metodoPagamento = $_POST['pagamento'];

            echo "<h2>Obrigado pela sua compra!</h2>";
            echo "<p>Nome: $nome $sobrenome</p>";
            echo "<p>Método de Pagamento: $metodoPagamento</p>";
        } else {
            echo "<p>Erro no processamento do pagamento.</p>";
        }

        ?>
           <a href="index.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>
