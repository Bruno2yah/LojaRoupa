<?php 

class Avaliacao{
    public $id, $nota, $comentario,$data, $idUsuario;

    public function getId() {
        return $this ->id;
    }

    public function setId($id){
        $this ->id = $id;
    }

    public function getNota() {
        return $this ->nota;
    }

    public function setNota($nota){
        $this ->nota = $nota;
    }

    public function getComentario() {
        return $this ->comentario;
    }

    public function setComentario($comentario){
        $this ->comentario = $comentario;
    }
    public function getData() {
        return $this ->data;
    }

    public function setData($data){
        $this ->data = $data;
    }
    public function getIdUsuario() {
        return $this ->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this ->idUsuario = $idUsuario;
    }
}



?>