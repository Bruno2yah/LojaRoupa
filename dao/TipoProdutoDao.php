<?php
    require_once '../../model/Conexao.php';
    
    class TipoProdutoDao {
        public static function insert($tipoProduto){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbtipoproduto (tipo) VALUES (?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $tipoProduto->getTipo());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtipoproduto";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtipoproduto WHERE idTipoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbtipoproduto WHERE idTipoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $tipoProduto){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbtipoproduto SET 
            tipo = ?
            WHERE idTipoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $tipoProduto->getTipo());
            $stmt->bindValue(2, $id);
            return $stmt->execute();
        }

    }
?>