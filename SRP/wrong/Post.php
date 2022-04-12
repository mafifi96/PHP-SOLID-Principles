<?php

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

    public function printJson($post)
    {
        return json_encode($post->getData());
    }

    public function printHtml($post)
    {
        return '<p>'.$post->title.'</p>';
    }
}