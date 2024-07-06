<?php 

class Gioco extends Prodotto {
    private $caratteristiche;
    private $dimensioni;

    public function __construct(Categoria $categoria, $nome, $prezzo, $foto, $caratteristiche, $dimensioni) {
        parent::__construct($categoria, $nome, $prezzo, $foto);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

    public function getCaratteristiche(){
        return $this->caratteristiche;
    }

    public function getDimensioni(){
        return $this->dimensioni;
    }
}