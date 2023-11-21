<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login Form</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <form action="processar_login.php" method="post">
    <!-- Seus campos de entrada e outros elementos do formulário -->
    <div class="input-field">
        <input type="text" name="username" id="username" placeholder="Digite seu nome de usuário">
        <div class="underline"></div>
    </div>
    <div class="input-field">
        <input type="password" name="password" id="password" placeholder="Digite sua senha">
        <div class="underline"></div>
    </div>

    <input type="submit" value="Continuar">
</form>

        <div class="footer">
            <span>Ainda não tem uma conta?<a href="regi.php">Clique aqui</a></span> 
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Login com Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                       Login com Facebook
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>