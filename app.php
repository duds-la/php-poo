<?php

require __DIR__.'/vendor/autoload.php';


use Duadsal\PhpPoo\PessoaFisica;


$eduardo = new PessoaFisica;

$eduardo->name ="eduardo";
$eduardo->age= 20;
$eduardo->cpf="123";


dump($eduardo->getCpf());