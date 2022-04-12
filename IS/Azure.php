<?php

namespace solid\IS;

use solid\IS\ASPInterface;

class Azure implements ASPInterface{

    public function __construct()
    {
        $this->ASP();
    }

    public function ASP()
    {
        return "support ASP.NET";
    }
}