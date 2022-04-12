<?php

namespace solid\OC;

use solid\OC\Contentable;

class Post{
    
    public function publish(Contentable $post){

        return $post->content();
    }
}

