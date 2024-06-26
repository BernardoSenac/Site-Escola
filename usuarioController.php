<?php
    require_once "../models/usuarioModel.php";
    
    class usuarioController {
        public function validarUsuario(string $email, string $senha){
            $email = str_replace(" ", "", $email);
            $senha = md5(str_replace(" ", "", $senha));

            $usuarioModel = new usuarioModel();
            $usuario = new usuarioModel(null, null, null, $email, $senha);

            $retorno = $usuarioModel->buscarUsuario($usuario);

            session_start();
            if ($retorno) {
                $_SESSION['esta_logado'] = True;
                $_SESSION['id_tipo_usuario'] = $retorno['id_tipo_usuario'];
 
                
                    header('Location: ../views/principal.php');
            }
            else {
                header('Location: ../views/login.php');
            }
            
            exit();
        }
        
        public function cadastrarUsuario(int $idTipoUsuario, string $nome, string $email, string $senha){
            $email = str_replace(" ", "", $email);
            $senha = md5(str_replace(" ", "", $senha));

            $usuarioModel = new UsuarioModel();
            $usuario = new usuarioModel(null, $idTipoUsuario, $nome, $email, $senha);

            if ($usuarioModel->buscarEmailUsuario($usuario)){
                echo '<script>alert("Esse e-mail já está sendo utilizado por uma conta!");';
                echo 'window.location.href = "../views/cadastro.php";</script>';         
            }
            else{
                $retorno = $usuarioModel->cadastrarUsuario($usuario);

                if($retorno){
                    header('Location: ../views/listarUsuarios.php');
                }
                else{
                    header('Location: ../views/cadastro.php');
                }
                exit();
            }
        }
    }
?>