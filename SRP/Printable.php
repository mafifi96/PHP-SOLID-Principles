<?php

namespace solid\SRP;
use solid\SRP\Post;

interface PrintablePost{

    public function print(Post $post);
}