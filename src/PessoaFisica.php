<?php

declare(strict_types=1);

namespace Duadsal\PhpPoo;

//Pense em uma classe como uma forma, que vai nos possibilitar criar diversos
//objetos do tipo:
class PessoaFisica
{

    const OBJECT_TYPE = 'Humano';
    //aqui fica as propriedades e métodos
    public static string $name;
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
        self::$name = $name;    
        $this->email = $email;    
        $this->phone = $phone;    
        $this->cpf = $cpf;    
        $this->age = $age;    
    }

    public static function getInformation( string $name): string
    {
        self::$name=$name;
        return self::$name . " - " . self::OBJECT_TYPE; 
    }
    
}


