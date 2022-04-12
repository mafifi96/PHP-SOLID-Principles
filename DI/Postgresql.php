<?php

namespace solid\DI;
use solid\DI\DatabaseInterface;

class Postgresql implements DatabaseInterface{

    public function connect()
    {
        return "Postgresql Connected..";
    }
}