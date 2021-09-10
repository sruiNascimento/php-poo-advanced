<?php 
require 'Conta.php';

$endereco1 = new Endereco("London", "Smallville", "Wall Street", "1024P");
//echo $endereco1->getToString();
$kal = new Titular(new CPF("123.456.789-32"), "KAL-EL", $endereco1);
//echo $kal->getToString();

$conta1 = new Conta($kal);

echo $conta1->getToString();