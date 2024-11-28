<?php

include_once("Item.php");

class Inventario {
    private $capacidadeMaxima;
    private $itens = [];

    public function __construct($capacidadeInicial) {
        $this->capacidadeMaxima = $capacidadeInicial;
    }

    public function adicionar(Item $item) {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            echo "Item {$item->getName()} adicionado ao inventário.<br>";
            return true;
        } else {
            echo "Não há espaço suficiente no inventário para adicionar {$item->getName()}.<br>";
            return false;
        }
    }

    public function remover(Item $item) {
        foreach ($this->itens as $indice => $inventarioItem) {
            if ($inventarioItem === $item) {
                unset($this->itens[$indice]);
                echo "Item {$item->getName()} removido do inventário.<br>";
                return true;
            }
        }
        echo "O item {$item->getName()} não foi encontrado no inventário.<br>";
        return false;
    }

    public function aumentarCapacidade($aumento) {
        $this->capacidadeMaxima += $aumento;
        echo "Capacidade do inventário aumentada para {$this->capacidadeMaxima}.<br>";
    }

    public function capacidadeLivre() {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $ocupado;
    }
}
