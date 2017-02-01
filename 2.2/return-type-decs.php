<?php

class User {

}

class MySqlUser extends User {

}

interface IMembership {
    public function getUser(string $email) : User;
}

class MySqlMembership implements IMembership {
    public function getUser(string $email) : User {
        return new MySqlUser;
    }
}

$sys = new MySqlMembership;

$sys->getUser('foo@foo.com');

function sum(int $a, int $b) : int {
    return $a + $b;
}

// $result = sum(1, 2);

// var_dump($result);