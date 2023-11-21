<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style/regi.css">
</head>
<body>
    <main>
        <h1>Criação de conta</h1>
        <div class="social-media">
            <a href="https://www.google.com.br/?hl=pt-BR">
                <img src="assets/google.png" alt="Google">
            </a>
            <a href="https://www.facebook.com/">
                <img src="assets/facebook.png" alt="Facebook">
            </a>
            <a href="https://br.linkedin.com/">
                <img src="assets/linkedin.png" alt="Linkedin">
            </a>
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>

        <form method="post" action="processar_registro.php">
            <label for="name">
                <span>Nome</span>
                <input type="text" id="name" name="usuario">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="senha">
            </label> <br> <br> <br>
            <span>Já tem uma conta? <a href="login.php">Clique aqui</a></span> 
            <input type="submit" value="Registrar" id="button"> 
            
        </form>
    </main>
    <section class="images">
        <img src="assets/mobile.svg" alt="Mobile">
        <div class="circle"></div>
    </section>
</body>
</html>
