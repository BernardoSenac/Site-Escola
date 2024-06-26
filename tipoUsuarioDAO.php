<?php
    require_once "conexao.php";

    class tipoUsuarioDAO{
        public function buscarTiposUsuario(){
            $conexao = (new conexao)->getConexao();
            $sql = "SELECT * FROM tipo_usuario;";

            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
    }
?>

