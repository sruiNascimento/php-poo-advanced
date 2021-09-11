<?php 


class Pessoa 
{
    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    private function validaNome($nome): void
    {
        if (strlen($nome) < 2) {
            echo "Nome inválido, pois nome precisa conter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        }
    }

    public function getToString(): string 
    {
        return  "Nome: $this->nome" . PHP_EOL . 
                "CPF: " . $this->getCpf() . PHP_EOL;
    }
}