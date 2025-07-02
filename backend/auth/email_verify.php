<?php

    session_start();

    require_once '../includes/database.php';
    require '../../controllers/User.php';
    use Controller\User;

    $headers = getallheaders();
    $csrf = $headers['X-CSRF-Token'];
    
    if(isset($_SESSION['csrf_token']) && $csrf === $_SESSION['csrf_token']){
        
        $data = json_decode(file_get_contents('php://input'), true);

        $birthday = "{$data['year']}-{$data['month']}-{$data['day']}";
        // var_dump($birthday);
        $user_created = User::create([
            "nom_famille" => $data['nom_famille'],
            "prenom" => $data['prenom'],                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
            "naissance" => $birthday,
            "email" => $data['email'],
            "password" => password_hash($data['password'], PASSWORD_DEFAULT)
        ]);

        echo json_encode($user_created);
        
    }

?>