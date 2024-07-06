<?php 

class Accessorio extends Prodotto {
    private $materiale;
    private $dimensioni;

    public function __construct(Categoria $categoria, $nome, $prezzo, $foto, $materiale, $dimensioni) {
        parent::__construct($categoria, $nome, $prezzo, $foto);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    public function getMateriale(){
        return $this->materiale;
    }

    public function getDimensioni(){
        return $this->dimensioni;
    }

}