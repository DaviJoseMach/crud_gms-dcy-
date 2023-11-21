<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/back.png');
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .payment-box {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px black;
            text-align: center;
            margin: 10px;
            transition: transform 0.7s ease, box-shadow 0.8s ease; /* Adiciona uma transição suave */
        }
        .payment-box:hover{
            transform: scale(1.05); /* Zoom ao passar o mouse */
      
        }


        .payment-button {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .payment-button img {
            width: 30px;
            margin-right: 10px;
        }

        #payment-options {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #785FEE;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.5s ease, transform 0.4s ease;
        }

        input[type="submit"]:hover {
            background-color: #433585;
            transform: scale(1.05);
        }

        .name-container {
        display: flex;
     gap: 10px; /* Espaço entre os campos de entrada */
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
    <div class="payment-box">
        <h2>Pagamento</h2>
        <form action="processar_pagamento.php" method="post">
        <div class="name-container">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
            </div>
            <input type="password" name="senha" placeholder="Senha" required>

            <div id="payment-options">
                <div class="payment-button">
                    <img src="assets/debito.webp" alt="Ícone de Cartão de Crédito">
                    <label><input type="radio" name="pagamento" value="cartao_credito"> Cartão de Crédito</label>
                </div>

                <div class="payment-button">
                    <img src="assets/credito.png" alt="Ícone de Cartão de Débito">
                    <label><input type="radio" name="pagamento" value="cartao_debito"> Cartão de Débito</label>
                </div>

                <div class="payment-button">
                    <img src="assets/pix.png" alt="Ícone de PIX">
                    <label><input type="radio" name="pagamento" value="pix"> PIX</label>
                </div>
            </div>


            <input type="submit" value="Pagar"> <br> <br>

            <a href="index.html"><input type="button" value="Voltar"></a>
        </form>
        
    </div>
</body>
</html>
