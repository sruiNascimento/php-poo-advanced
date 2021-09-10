<?php

require 'CPF.php';
require 'Endereco.php';

class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco) 
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getEndereco(): Endereco 
    {
        return $this->endereco;
    }

    public function getToString(): string
    {
        return  "CPF: ". $this->getCpf() . PHP_EOL . 
                "Nome: $this->nome" . PHP_EOL . 
                $this->endereco->getToString();
    }

    private function validaNome($nome): void
    {
        if (strlen($nome) < 2) {
            echo "Nome inválido, pois nome precisa conter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        }
    }

}