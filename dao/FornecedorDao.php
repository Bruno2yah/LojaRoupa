<?php
    require_once '../../model/Conexao.php';
    
    class FornecedorDao{
        public static function insert($fornecedor){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbfornecedor (nome, cnpj, numero, email, foto) VALUES (?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $fornecedor->getNome());
            $stmt->bindValue(2, $fornecedor->getCnpj());
            $stmt->bindValue(3, $fornecedor->getNumero());
            $stmt->bindValue(4, $fornecedor->getEmail());
            $stmt->bindValue(5, $fornecedor->getFoto());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbfornecedor";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbfornecedor WHERE idFornecedor = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbfornecedor WHERE idFornecedor = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $fornecedor ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbfornecedor SET 
            nome = ?, 
            cnpj  = ?,
            numero = ?, 
            email = ?, 
            foto = ?
            WHERE idFornecedor = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $fornecedor->getNome());
            $stmt->bindValue(2, $fornecedor->getCnpj());
            $stmt->bindValue(3, $fornecedor->getNumero());
            $stmt->bindValue(4, $fornecedor->getEmail());
            $stmt->bindValue(5, $fornecedor->getFoto());
            $stmt->bindValue(6, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }

    }
?>