<?php 

class Prodotto {
    private Categoria $categoria;
    private $nome;
    private $prezzo;
    private $poster;
    

    public function __construct(Categoria $categoria, $nome, $prezzo, $poster) {
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->poster = $poster;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getPoster(){
        return $this->poster;
    }

}