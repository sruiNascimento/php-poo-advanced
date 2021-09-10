<?php

require 'CPF.php';

class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome) 
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getToString(): string
    {
        return  "CPF: ". $this->cpf->getCpf() . PHP_EOL . 
                "Nome: $this->nome" . PHP_EOL;
    }

    private function validaNome($nome): void
    {
        if (strlen($nome) < 2) {
            echo "Nome inválido, pois nome precisa conter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        }
    }

}