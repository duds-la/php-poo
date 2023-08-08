<?php

declare(strict_types=1);

namespace Duadsal\PhpPoo;

//Pense em uma classe como uma forma, que vai nos possibilitar criar diversos
//objetos do tipo:
class PessoaFisica extends Pessoa implements PessoaFisicaInterface
{

    const OBJECT_TYPE = 'Humano';
    //aqui fica as propriedades e métodos
    public string $name;
    public string $cpf;
    public int    $age;

    public function getCpf(): string
    {
        return $this->cpf;   
    }
   


    // public function __construct(
    //     string $name,
    //     string $cpf,
    //     int $age
        
    // )
    // {
    //     $this->$name = $name;     
    //     $this->cpf = $cpf;    
    //     $this->age = $age;    
    // }

}


