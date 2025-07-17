<?php

require_once __DIR__.'/../../cors.php';

require_once "../../vendor/autoload.php";

use Controller\File;
use Controller\Post;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $return = [];
        if(isset($_FILES['post']) && $_FILES['post']['error'] == 0){
            $file = $_FILES['post'];
            $result = File::verify($file);
            $savefile = File::save($file, $result['file_type']);
            if($savefile['return']){
                $post = Post::create([
                    'file' => $savefile['filename'],
                    'description' => $_POST['descaription']
                ]);
                
                if($post){
                    $return = [
                        'status' => 'success',
                    ];
                }else{
                    $return = [
                        'status' => 'error',
                        'content' => "L'insertion n'a pas fonctionné"
                    ];
                }
            };
        }else{
            $return = [
                'status' => "error",
                'content' => "Le fichier n'a été bien généré !!"
            ];
        }

        echo json_encode($return);
    }

?> 