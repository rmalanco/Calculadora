<?php

namespace App;

require_once 'Calculadora.php';

class Operaciones extends Calculadora
{
    public function realizarOperacion(string $operacion, int $a, int $b)
    {
        $calculadora = new Calculadora();
        return match ($operacion) {
            'suma' => $calculadora->suma($a, $b),
            'resta' => $calculadora->resta($a, $b),
            'multiplicacion' => $calculadora->multiplicacion($a, $b),
            'division' => $calculadora->division($a, $b),
            default => "Operación no válida",
        };
    }
}
