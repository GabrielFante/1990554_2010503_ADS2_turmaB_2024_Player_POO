<?php

require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Inventario
{
    public int $capacidadeMaxima = 20;
    public array $itens = [];

    public function __construct(int $capacidadeMaxima){
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function getCapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void{
        if ($capacidadeMaxima < 20){
            $this->capacidadeMaxima = 20;
        } else {
            $this->capacidadeMaxima = $capacidadeMaxima;
        }
    }

    public function getItens(): array{
        return $this->itens;
    }

    public function setItens(array $itens): void{
        $this->itens = $itens;
    }

    public function adicionar(Item $item): bool{
        if ($item->getTamanho() <= $this->getCapacidadeMaxima()){
            echo "<li>{$item->getName()} coletado e adicionado no inventário<br>";
            $this->itens[] = $item;
            $this->capacidadeMaxima -= $item->tamanho;
            return TRUE;
        }
        echo 'Capacidade do inventário excedida<br>';
        echo "Capacidade Disponível: <strong>{$this->getCapacidadeMaxima()}</strong><br>";
        return FALSE;
    }

    public function remover(Item $item): bool {
        foreach ($this->itens as $chave => $nameItem) {
            if ($nameItem->getName() === $item->getName()){
                unset($this->itens[$chave]);
                echo "<li>{$item->getName()} foi removido do Inventário.<br>";
                $this->capacidadeMaxima += $item->tamanho;
                return true;
            }
        }
        echo "{$item->getName()} não existe no inventário.<br>";
        return false;
    }

    public function capacidadeLivre(){
        echo "Capacidade Disponível: <strong>{$this->getCapacidadeMaxima()}</strong><br>";
    }
}
