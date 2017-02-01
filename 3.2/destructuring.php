<?php

// $names = ['jeremy', 'nancy', 'steve'];

// list($a, $b, $c) = $names;

// [$a, $b, $c] = $names;

// $names = [ 'firstName' => 'john', 'lastName' => 'doe'];
// list('firstName' => $first, 'lastName' => $last) = $names;
// ['firstName' => $first, 'lastName' => $last] = $names;


// var_dump($first);

$people = [
    [ 'firstName' => 'john', 'lastName' => 'doe'],
    [ 'firstName' => 'jane', 'lastName' => 'doe'],
    [ 'firstName' => 'steven', 'lastName' => 'smith']
];

foreach ($people as ['firstName' => $first, 'lastName' => $last]) {
    echo "$first $last ::";
}