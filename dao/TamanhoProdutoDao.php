<?php
    require_once '../../model/Conexao.php';
    
    class TamanhoProdutoDao {
        public static function insert($tamanhoProduto){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbtamanhoproduto (tamanho) VALUES (?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $tamanhoProduto->getTamanho());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtamanhoproduto";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtamanhoproduto WHERE idTamanhoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbtamanhoproduto WHERE idTamanhoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $tamanhoProduto){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbtamanhoproduto SET 
            tamanho = ?
            WHERE idTamanhoProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $tamanhoProduto->getTamanho());
            $stmt->bindValue(2, $id);
            return $stmt->execute();
        }

    }
?>