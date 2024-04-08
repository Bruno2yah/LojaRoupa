<?php
    require_once '../../model/Conexao.php';
    
    class LigaDao{
        public static function insert($liga){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbliga (nome, divisao, foto, idPais) VALUES (?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $liga->getNome());
            $stmt->bindValue(2, $liga->getDivisao());
            $stmt->bindValue(3, $liga->getFoto());
            $stmt->bindValue(4, $liga->getIdPais());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbliga";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbliga WHERE idLiga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbliga WHERE idLiga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $liga){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbliga SET 
            nome = ?, 
            divisao = ?,
            foto = ?, 
            idPais = ?
            WHERE idLiga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $liga->getNome());
            $stmt->bindValue(2, $liga->getDivisao());
            $stmt->bindValue(3, $liga->getFoto());
            $stmt->bindValue(4, $liga->getIdPais());
            $stmt->bindValue(5, $id);
            return $stmt->execute();
        }

        public static function innerJoinIndex(){
            $conexao = Conexao::conectar();
            $query = "SELECT tbliga.*, tbpais.nome
                      FROM tbliga
                      INNER JOIN tbpais ON tbliga.idPais = tbpais.idPais
                    ";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

    }
?>