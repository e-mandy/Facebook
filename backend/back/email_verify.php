<?php

    session_start();

    require_once 'partials/database.php';

    $headers = getallheaders();
    $csrf = $headers['X-CSRF-Token'];
    
    if($csrf === $_SESSION['csrf-token']){
        
        $data = file_get_contents(json_decode('php://input'));


        //
    }else{

    }