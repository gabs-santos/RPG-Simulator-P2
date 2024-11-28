<?php

class Item 
{
    private $name;
    private $tamanho;
    private $classe;

    public function __construct($name, $tamanho, $classe) {
        $this->name = $name;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getName() {
        return $this->name;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getClasse() {
        return $this->classe;
    }
}
