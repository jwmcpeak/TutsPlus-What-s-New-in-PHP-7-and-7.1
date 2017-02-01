<?php

// Error
// TypeError
// ParseError
// AssertionError
// ArithmeticError
// DivisionByZeroError

$foo = 1;

function sum(int $a, int $b) {
    return $a + $b;
}

try {
    $foo->method();

    sum('hello', 1);
} 
catch (Throwable $t) {
    echo 'error caught as throwable';
}
catch (Exception $e) {
    
}
// catch (TypeError $typeE0) {

// }
// catch (Error $e) {
//     echo 'error was caught';
// }