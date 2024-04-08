<?php
    require_once '../../model/Conexao.php';
    
    class ClubeDao{
        public static function insert($clube){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbclube (nome, apelido, foto, idLiga) VALUES (?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $clube->getNome());
            $stmt->bindValue(2, $clube->getApelido());
            $stmt->bindValue(3, $clube->getFoto());
            $stmt->bindValue(4, $clube->getIdLiga());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbclube";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbclube WHERE idClube = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbclube WHERE idClube = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $clube){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbclube SET 
            nome = ?, 
            apelido = ?,
            foto = ?, 
            idLiga = ?
            WHERE idClube = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $clube->getNome());
            $stmt->bindValue(2, $clube->getApelido());
            $stmt->bindValue(3, $clube->getFoto());
            $stmt->bindValue(4, $clube->getIdLiga());
            $stmt->bindValue(5, $id);
            return $stmt->execute();
        }

        public static function innerJoinIndex(){
            $conexao = Conexao::conectar();
            $query = "SELECT tbclube.*, tbliga.nome
                      FROM tbclube
                      INNER JOIN tbliga ON tbclube.idLiga = tbliga.idLiga
                    ";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

    }
?>