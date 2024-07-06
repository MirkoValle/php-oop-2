<?php 

class Cibo extends Prodotto {
    private $peso;
    private $ingredienti;

    public function __construct(Categoria $categoria, $nome, $prezzo, $foto, $peso, $ingredienti) {
        parent::__construct($categoria, $nome, $prezzo, $foto);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getIngredienti(){
        return $this->ingredienti;
    }
}