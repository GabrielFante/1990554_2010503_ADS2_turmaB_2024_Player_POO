<?php

require_once('class/Player.php');
require_once('class/Inventario.php');
require_once('class/Item.php');
require_once('class/Defesa.php');
require_once('class/Magia.php');
require_once('class/Ataque.php');

$fireBall = new Magia('Bola de Fogo', 9, 'teste1');
$waterLife = new Magia('Água da vida', 2, 'Magia');

$espada = new Ataque('Espada', 9, 'teste2');
$arco = new Ataque('Arco', 7, 'Ataque');

$escudo = new Defesa('Escudo de Ferro', 9, 'teste3');
$capacete = new Defesa('Capacete de Dima', 4, 'Defesa');

$player1 = new Player('Gabriel');

$player1->subirNivel();
$player1->coletarItem($espada);
$player1->coletarItem($arco);
$player1->coletarItem($capacete);
$player1->coletarItem($escudo);
$player1->coletarItem($fireBall);
$player1->soltarItem($fireBall);
$player1->soltarItem($espada);
$player1->coletarItem($waterLife);
$player1->soltarItem($escudo);
$player1->soltarItem($waterLife);
$player1->soltarItem($fireBall);
$player1->inventario->capacidadeLivre();

echo '<hr></hr>';

$player2 = new Player('Leonardo');
$player2->coletarItem($espada);
$player2->coletarItem($escudo);
$player2->coletarItem($waterLife);
$player2->coletarItem($fireBall);
$player2->coletarItem($capacete);
$player2->coletarItem($arco);
$player2->subirNivel();
$player2->coletarItem($espada);
$player2->inventario->capacidadeLivre();

echo '<hr></hr>';

echo "<li><strong>TAMANHO:</strong> {$capacete->getTamanho()} | {$capacete->getName()} | {$capacete->getClasse()}<br>";
echo "<li><strong>TAMANHO:</strong> {$escudo->getTamanho()} | {$escudo->getName()} | {$escudo->getClasse()}<br>";
echo "<li><strong>TAMANHO:</strong> {$espada->getTamanho()} | {$espada->getName()} | {$espada->getClasse()}<br>";
echo "<li><strong>TAMANHO:</strong> {$arco->getTamanho()} | {$arco->getName()} | {$arco->getClasse()}<br>";
echo "<li><strong>TAMANHO:</strong> {$fireBall->getTamanho()} | {$fireBall->getName()} | {$fireBall->getClasse()}<br>";
echo "<li><strong>TAMANHO:</strong> {$waterLife->getTamanho()} | {$waterLife->getName()} | {$waterLife->getClasse()}<br>";

echo '<hr></hr>';