<?php
    require_once "../controllers/usuarioController.php";

    $usuarioController = new usuarioController();

    $rota = $_POST["rota"];
    
    switch($rota){
        case "entrar":
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $usuarioController->validarUsuario($email, $senha);
            break;

        case "cadastrar":
            $idTipoUsuario = $_POST["id_tipo_usuario"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            
            $usuarioController->cadastrarUsuario($idTipoUsuario, $nome, $email, $senha);
            break;
        }
?>