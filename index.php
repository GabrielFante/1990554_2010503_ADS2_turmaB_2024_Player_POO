<?php

include_once('Inventario.php');

class Player
{
    public string $nickname;
    public int $nivel = 1;
    public Inventario $inventario;

    public function __construct(string $nickname){
        $this->setNickName($nickname);
        $this->inventario = new Inventario(20);
    }

    public function getNickName(): string{
        return $this->nickname;
    }

    public function setNickName(string $nickname): void{
        if ($nickname == ''){
            $this->nickname = 'NickName indefinido!';
        } else{
            $this->nickname = $nickname;
        }
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function setNivel(int $nivel): void{
        if ($nivel > 1){
            $this->nivel = 1;
        } else{
            $this->nivel = $nivel;
        }
    }

    public function getInventario(): Inventario{
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario): void{
        $this->inventario = $inventario;
    }

    public function coletarItem(Item $item): bool{
        return $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item): bool{
        return $this->inventario->remover($item);
    }

    public function subirNivel(){
        $this->nivel ++;
        $this->inventario->capacidadeMaxima += $this->nivel * 3;
        echo "O Player {$this->getNickName()}, subiu de nível. ESPAÇO DO IVENTARIO ATUAL AUMENTADO PARA: {$this->inventario->capacidadeMaxima}<br>";
    }
}
