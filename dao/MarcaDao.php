<?php 
require_once '/xampp/htdocs/lojaRoupa/model/conexao.php';

class marcaDao {
    public static function insert($marca){
        $conexao = Conexao::conectar();
        $query = "INSERT INTO tbmarca (nome, foto) VALUES (?, ?)";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $marca->getNome());
        $stmt->bindValue(2, $marca->getFoto());
        $stmt-> execute();
    }

    public static function selectAll(){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbmarca";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbmarca WHERE idMarca = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id){
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbmarca WHERE idMarca = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        return  $stmt->execute();
    }

    public static function update($id, $marca){
        $conexao = Conexao::conectar();
        $query = "UPDATE tbmarca SET 
        nome = ?, 
        foto = ?
        WHERE idMarca = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $marca->getNome());
        $stmt->bindValue(2, $marca->getFoto());
        $stmt->bindValue(3, $id);
        return $stmt->execute();
    }
}



?>