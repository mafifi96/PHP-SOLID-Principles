<?php

namespace solid\DI;
use solid\DI\DatabaseInterface;

class Mysql implements DatabaseInterface{

    public function connect()
    {
        return "Mysql Connected..";
    }
}