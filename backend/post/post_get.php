<?php
require_once '../../cors.php';

use Controller\Post;

    $posts = Post::all();
    if($post){
        echo json_encode($post);
    }
?>