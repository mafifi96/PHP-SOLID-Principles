<?php

namespace solid\SRP;
use solid\SRP\PrintablePost;
use solid\SRP\Post;

class PrintJson {

    public function print(Post $post)
    {
        return json_encode($post->getData());
    }
}