<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Tela de Login - JHS</title>
</head>
<body>
    <form class="login" method="POST" action="../PHP/valida_login.php">
        <h2>Login</h2>
        <div class="box-user">
            <input type="text" name="nome" id="nome" required>
            <label>Usuário</label>
        </div>
        <div class="box-user">
            <input type="password" name="senha" id="senha" required>
            <label>Senha</label>
        </div>
        <div>
            <a href="../index.php" class="forget"> Sair</a>
        </div>
        <input type="submit" value="Entrar" id="submit" name="submit" class="btn" >
        </input>
    </form>
</body>
</html>
