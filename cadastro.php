<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="../public/javascript/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<?php
    require_once "../models/tipoUsuarioModel.php";

    session_start();
    if ($_SESSION['id_tipo_usuario'] !== 1){
        if ($_SESSION['esta_logado'] !== True){
            header("Location: login.php");
        }
        header('Location: principal.php');
    }

    $tipoUsuarioModel = new tipoUsuarioModel();
    
    $tiposUsuario = $tipoUsuarioModel->buscarTiposUsuario();
?>
<body onload="return retornarCamposCadastro(event)">
    <header>
        <h1>Cadastrar-se</h1>
    </header>
    <form action="../routers/usuarioRouter.php" method="post" onsubmit="return validarCamposCadastro(event);">
        <label for="nome">Nome</label>
        <br>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="email">E-mail</label>
        <br>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" id="senha" required>
        <br>
        <label for="id_tipo_usuario">Selecione o tipo de usuário</label>
        <br>
        <select name="id_tipo_usuario" id="id_tipo_usuario" required>
            <option value="0">Selecione: </option>
            <?php foreach ($tiposUsuario as $tipoUsuario) :?>       
                <option value="<?=$tipoUsuario->idTipoUsuario ?>"><?=$tipoUsuario->descricao ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <input type="hidden" name="rota" id="rota" value="cadastrar">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>