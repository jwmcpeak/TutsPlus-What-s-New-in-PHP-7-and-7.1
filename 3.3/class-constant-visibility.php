<?php

class Calculator {
    public const PUBLIC_CONSTANT = 1;
    private const PRIVATE_CONSTANT = 2;
    protected const PROTECTED_CONSTANT = 3;

    public function add(int $a, int $b) {
        return $a + $b;
    }
}

var_dump(Calculator::PROTECTED_CONSTANT);