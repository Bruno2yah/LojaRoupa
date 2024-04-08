<?php

class TamanhoProduto{
    public $id, $tamanho;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this -> id = $id;
    }

    public function getTamanho(){
        return $this-> tamanho;
    }

    public function setTamanho($tamanho){
        $this -> tamanho = $tamanho;
    }
    
}

?>