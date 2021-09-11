<?php

namespace Alura\Banco\src\Modelo;

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function setCidade(string $novaCidade): void
    {   
        $this->cidade = $novaCidade;
    }

    public function getBairro(): string 
    {
        return $this->bairro;
    }

    public function setBairro($novoBairro): void
    {
        $this->bairro = $novoBairro;
    }

    public function getRua(): string 
    {
        return $this->rua;
    }

    public function setRua($novaRua): void 
    {
        $this->rua = $novaRua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero($novoNumero): void 
    {
        $this->numero = $novoNumero;
    }

    public function getToString(): string 
    {
        return  "Cidade: $this->cidade" . PHP_EOL . 
                "Bairro: $this->bairro" . PHP_EOL . 
                "Rua: $this->rua" . PHP_EOL . 
                "Número: $this->numero" . PHP_EOL;
    }
}