<?php

namespace solid\SRP;

class Post{
    
    public function getData() 
    {
        $data = [
            'title' => 'post title',
            'body'  => 'post body',
            'author'=> 'post author'

        ];

        return $data;
    }
}

