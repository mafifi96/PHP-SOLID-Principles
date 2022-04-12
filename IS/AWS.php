<?php

namespace solid\IS;

use solid\IS\ASPInterface;
use solid\IS\PHPInterface;
use solid\IS\NodeInterface;

class AWS implements ASPInterface,PHPInterface,NodeInterface{

    public function __construct()
    {
        
    }

    public function php()
    {
        return "support php";
    }
    public function node()
    {
        return "support node";
    }

    public function ASP()
    {
        return "support ASP.NET";
    }
}