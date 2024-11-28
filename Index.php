<?php

include_once('Ataque.php');
include_once('Defesa.php');
include_once('Magia.php');
include_once('Player.php');

$player1 = new Player("Jogador1");
$player2 = new Player("Jogador2");

$ataque1 = new Ataque("Espada Longa");
$ataque2 = new Ataque("Espada GPC");
$defesa1 = new Defesa("Escudo Relicario");
$defesa2 = new Defesa("Armadura de Espinhos");
$magia1 = new Magia("Bastao de Eras");
$magia2 = new Magia("Escudo de Mana");

echo "<br>";
$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);
$player1->coletarItem($ataque2);
$player1->coletarItem($defesa2);
$player1->coletarItem($magia2);

echo "<br>";
$player1->coletarItem(new Magia("Explosão Arcana"));

echo "<br>";
$player1->subirNivel();

echo "<br>";
$player1->coletarItem(new Magia("Nova de Gelo"));

echo "<br>";
$player2->coletarItem($defesa1);
$player2->soltarItem($defesa1);
