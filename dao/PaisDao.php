<?php
    require_once __DIR__.'/../model/Conexao.php';
    
    class PaisDao{
        public static function insert($pais){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbpais (nome, foto) VALUES (?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $pais->getNome());
            $stmt->bindValue(2, $pais->getFoto());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbpais";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbpais WHERE idPais = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbpais WHERE idPais = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $pais){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbpais SET 
            nome = ?, 
            foto = ?
            WHERE idPais = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $pais->getNome());
            $stmt->bindValue(2, $pais->getFoto());
            $stmt->bindValue(3, $id);
            return $stmt->execute();
        }

    }
?>