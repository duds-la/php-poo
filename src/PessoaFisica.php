<?php

declare(strict_types=1);

namespace Duadsal\PhpPoo;

//Pense em uma classe como uma forma, que vai nos possibilitar criar diversos
//objetos do tipo:
class PessoaFisica
{
    //aqui fica as propriedades e métodos
    public string $name;
    public string $email;
    public string $phone;
    public string $cpf;
    public int    $age;


    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $cpf,
        int $age
        
    )
    {
        $this->name = $name;    
        $this->email = $email;    
        $this->phone = $phone;    
        $this->cpf = $cpf;    
        $this->age = $age;    
    }

    
}


