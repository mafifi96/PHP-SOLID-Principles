<?php

namespace solid\OC;

use solid\OC\Contentable;

class VideoPost implements Contentable{
    
    public function content()
    {
        return "video"; 
    }
}

