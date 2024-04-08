<?php

class TipoProduto{
    public $id, $tipo;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this -> id = $id;
    }

    public function getTipo(){
        return $this-> tipo;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }
    
}

?>