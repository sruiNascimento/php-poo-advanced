<?php


//Classe deve ser implementado o pilar de Herança
class Funcionario extends Pessoa 
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string 
    {
        return $this->cargo;
    }

    public function getToString(): string
    {
        return  parent::getToString() . 
                "Cargo: $this->cargo" . PHP_EOL;    
    }
}