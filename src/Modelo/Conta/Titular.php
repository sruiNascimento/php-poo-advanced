<?php

namespace Modelo\Conta;

class Titular extends Pessoa 
{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco) 
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    
    public function getEndereco(): Endereco 
    {
        return $this->endereco;
    }

    public function getToString(): string
    {
        return  parent::getToString() . 
                $this->endereco->getToString();
    }

 

}