<?php

class Item
{
    public string $name;
    public int $tamanho;
    public string $classe;

    public function __construct(string $name, int $tamanho, string $classe){
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        if ($name == ''){
            $this->name = 'Indefinido!';
        } else{
            $this->name = $name;
        }
    }

    public function getTamanho(): int{
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void{
        if ($tamanho == 0 ){
            $this->tamanho = 0;
        } else{
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse(): string{
        return $this->classe;
    }

    public function setClasse(string $classe): void{
        if ($classe == ''){
            $this->classe = 'Indefinido!';
        } else{
            $this->classe = $classe;
        }
    }
}
