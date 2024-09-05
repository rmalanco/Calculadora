<?php

namespace App;

class Calculadora
{
    const PI = 3.14159;

    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiplicacion(int $a, int $b): int
    {
        return $a * $b;
    }

    public function division(int $a, int $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('No se puede dividir por cero');
        }
        return $a / $b;
    }

    public function areaCirculo(int $radio): float
    {
        return self::PI * $radio * $radio;
    }
}
