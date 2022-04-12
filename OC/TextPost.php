<?php

namespace solid\OC;

use solid\OC\Contentable;

class TextPost implements Contentable{
    
    public function content()
    {
        return "text"; 
    }
}

