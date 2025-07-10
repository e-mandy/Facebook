<?php
require '../../controllers/User.php';
use Controller\User;

    session_start();

    $headers = getallheaders();
    $csrf_token = $headers['X-CSRF-Token'];
    if(isset($_SESSION['csrf_token']) && $_SESSION['csrf_token']){
        $data = json_decode(file_get_contents('php://input'), true);
        $user = User::where('email', $data['email']);
        if($user['code_email'] == $data['code_otp']){
            $result = User::update($user['id']);
            
            echo ($result) ?  json_encode($user['id']) : json_encode(false);
        } 
    } 