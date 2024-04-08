<?php
    require_once __DIR__.'/../model/Conexao.php';
    
    class AvaliacaoDao{
        public static function insert($avaliacao){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbavaliacao (estrela, comentario, data, idUsuario) VALUES (?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $avaliacao->getNota());
            $stmt->bindValue(2, $avaliacao->getComentario());
            $stmt->bindValue(3, $avaliacao->getData());
            $stmt->bindValue(4, $avaliacao->getIdUsuario());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT nome, sobrenome, comentario, data, estrela FROM tbavaliacao INNER JOIN tbusuario on tbavaliacao.idUsuario = tbusuario.idUsuario";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbavaliacao WHERE idUsuario = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbavaliacao WHERE idAvaliacao = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $avaliacao){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbavaliacao SET 
            estrela = ?, 
            comentario = ?,
            idUsuario =?
            WHERE idAvaliacao = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $avaliacao->getNota());
            $stmt->bindValue(2, $avaliacao->getComentario());
            $stmt->bindValue(3, $avaliacao->getIdUsuario());
            $stmt->bindValue(4, $id);
            return $stmt->execute();
        }

    }
?>