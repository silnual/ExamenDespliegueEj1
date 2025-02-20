<?php

namespace App;

class Factorial{
    public function calcularFactorial(int $numero): int {
        if ($numero < 0) {
            throw new InvalidArgumentException("El número debe ser no negativo.");
        }
        return ($numero === 0 || $numero === 1) ? 1 : $numero * $this->calcularFactorial($numero - 1);
    }
}