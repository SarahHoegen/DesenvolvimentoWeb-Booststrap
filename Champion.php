<?php

class Champion
{
    private $id;
    private $nome;
    private $elemento;
    private $classe;
}

public function __construct(string $nome, string $elemento, string $classe, $id = null)
{
    $this->nome = $nome;
    $this->elemento = $elemento;
    $this->classe = $classe;
    $this->id = $id;
}

public function getId(): int
{
    return $this->int;
}

public function getNome(): string
{
    return $this->nome;
}

public function setNome(string $nome) 
{
    $this->nome = $nome;
}

public function getElemento(): string
{
    return $this->elemento;
}

public function setElemento(string $elemento) 
{
    $this->elemento = $elemento;
}

public function getClasse(): string
{
    return $this->classe;
}

public function setClasse(string $classe) 
{
    $this->classe = $classe;
}

?>