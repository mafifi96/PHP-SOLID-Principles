<?php

namespace solid\DI;
use solid\DI\DatabaseInterface;

class MongoDB implements DatabaseInterface{

    public function connect()
    {
        return "MongoDB Connected..";
    }
}