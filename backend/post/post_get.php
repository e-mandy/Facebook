<?php
require_once '../../cors.php';
require_once '../../vendor/autoload.php';
use Controller\Post;

    $posts = Post::all();
    if($posts){
        echo json_encode($posts);
    }
?>