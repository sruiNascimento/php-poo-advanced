<?php 
namespace Alura\Banco;

use Alura\Banco\Modelo\Endereco;


require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';

$endereco1 = new Endereco("London", "Smallville", "Wall Street", "1024P");
echo $endereco1->getToString();
$kal = new Titular("KAL-EL", new CPF("123.456.789-32"),  $endereco1);
echo $kal->getToString();

$conta1 = new Conta($kal);

echo $conta1->getToString();

//testando a classe Titular

// $kal1 = new Titular("KAL-EL", new CPF("123.456.789-32"),  new Endereco("London", "Smallville", "Wall Street", "1024P"));
// echo $kal1->getToString();

// //testando funcionario 
// $fun1 = new Funcionario("Rui", new CPF("444.555.666-99"), "Embaixador");
// echo $fun1->getToString();