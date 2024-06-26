<?php
    require_once 'DAL/usuarioDAO.php';

    class usuarioModel {
        public ?int $idUsuario;
        public ?int $idTipoUsuario;
        public ?string $nome;
        public ?string $email;
        public ?string $senha;

        public function __construct(?int $idUsuario = null, ?int $idTipoUsuario = null, ?string $nome = null, ?string $email = null, ?string $senha = null) {
            $this->idUsuario = $idUsuario;
            $this->idTipoUsuario = $idTipoUsuario;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function buscarUsuario(usuarioModel $usuario){
            $usuarioDAO = new usuarioDAO();

            return $usuarioDAO->buscarUsuario($usuario);
        }

        public function cadastrarUsuario(usuarioModel $usuario){
            $usuarioDAO = new usuarioDAO();

            return $usuarioDAO->cadastrarUsuario($usuario);
        }

        public function buscarEmailUsuario(usuarioModel $usuario){
            $usuarioDAO = new usuarioDAO();

            return $usuarioDAO->buscarEmailUsuario($usuario);
        }
    
    }
?>