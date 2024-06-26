<?php
    require_once "conexao.php";
    
    class usuarioDAO{
        public function buscarUsuario(usuarioModel $usuario){
            $conexao = (new conexao())->getConexao();
            $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha;";

            $stmt = $conexao->prepare($sql);
            $stmt->bindvalue(':email', $usuario->email);
            $stmt->bindValue(':senha', $usuario->senha);
            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $retorno;    
        }

        public function cadastrarUsuario(usuarioModel $usuario){
            $conexao = (new conexao())->getConexao();
            $sql = "INSERT INTO usuario values(null, :idTipoUsuario, :nome, :email, :senha);";

            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':idTipoUsuario', $usuario->idTipoUsuario);
            $stmt->bindValue(':nome', $usuario->nome);
            $stmt->bindValue(':email', $usuario->email);
            $stmt->bindValue(':senha', $usuario->senha);
            $retorno = $stmt->execute();
            return $retorno;
        }

        public function buscarEmailUsuario(usuarioModel $usuario){
            $conexao = (new conexao())->getConexao();
            $sql = "SELECT * FROM usuario WHERE email = :email;";

            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":email", $usuario->email);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>