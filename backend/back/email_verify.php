<?php

    session_start();

    require_once 'partials/database.php';
    use Controller\User;

    $headers = getallheaders();
    $csrf = $headers['X-CSRF-Token'];
    
    if(isset($_SESSION['csrf_token']) && $csrf === $_SESSION['csrf-token']){
        
        $data = file_get_contents(json_decode('php://input', true));

        $birthday = "{$data['year']}-{$data['month']}-{$data['day']}";
        $user_created = User::create([
            "nom_famille" => $data['nom_famille'],
            "prenom" => $data['prenom'],
            "naissance" => $birthday,
            "email" => $data['email'],
            "password" => hash(PASSWORD_DEFAULT, $data['password'])
        ]);

        echo json_encode($user_created);
        
    }else{

    }

?>