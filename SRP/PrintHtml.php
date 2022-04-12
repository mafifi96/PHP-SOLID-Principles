<?php

namespace solid\SRP;

use solid\SRP\PrintablePost;
use solid\SRP\Post;

class PrintHtml  {

    public function print(Post $post)
    {
        return '<p>'.$post->getData()['title'].'</p>';
    }
}