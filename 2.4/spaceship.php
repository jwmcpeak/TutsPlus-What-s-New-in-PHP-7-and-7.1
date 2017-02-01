<?php

// 1 <=> 1 == 0
// 2 <=> 1 == 1
// 1 <=> 2 == -1

$names = ['Jeremy', 'Steve', 'Stephen', 'Chris', 'Martha'];

usort($names, function($a, $b) {
    return $a <=> $b;
});

var_dump($names);