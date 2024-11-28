<?php

include_once("Inventario.php");

class Player {
    private $nickName;
    private $nivel;
    private $inventario;

    public function __construct($nickName) {
        $this->nickName = $nickName;
        $this->nivel = 1;
        $this->inventario = new Inventario(20);
    }

    public function subirNivel() {
        $this->nivel++;
        $aumento = $this->nivel * 3;
        $this->inventario->aumentarCapacidade($aumento);
    }

    public function coletarItem(Item $item) {
        $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item) {
        $this->inventario->remover($item);
    }
}
