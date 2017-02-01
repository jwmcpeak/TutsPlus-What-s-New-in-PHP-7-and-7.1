<?php

interface ILogger {
    public function log();
}

class LoggerBase {

}

$logger = new class(1000) extends LoggerBase {   
    public function __construct($data) {
        $this->data = $data;
    }

    public function log() {
        echo 'this is the log method and data = ' . $this->data;
    }
};

$logger->log();

//var_dump($logger instanceof LoggerBase);