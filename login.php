<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
<form action="../routers/usuarioRouter.php" method="post">
    <label for="email">E-mail</label>
    <br>
    <input type="email" name="email" id="email">
    <br>
    <label for="senha">Senha</label>
    <br>
    <input type="password" name="senha" id="senha">
    <br>
    <br>
    <input type="hidden" name="rota" id="rota" value="entrar">
    <input type="submit" value="Entrar">
</form>
</body>
</html>