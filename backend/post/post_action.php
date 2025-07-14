<?php
    require_once __DIR__.'../../../cors.php';
    use Controller\Image;
    
    if(isset($_SESSION['csrf_token']) && !empty($_SESSION['csrf_token'])){
        $data = json_decode(file_get_contents('php://input'), true);

        if($data['csrf_token'] == $_SESSION['csrf_token']){
            if($data['image'] !== ""){
                $is_valid_iamge = Image::verify($data['image']);
            }
        }
    }

?>