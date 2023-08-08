<?php

declare(strict_types=1);

namespace Duadsal\PhpPoo;

abstract class Pessoa
{
    public string $name;

    public function showName(): void
    {
        echo $this->name . PHP_EOL;
    }

}