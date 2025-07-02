<?php

namespace Controller;

require_once __DIR__ . '/../vendor/autoload.php';


use Partials\Database;
use Controller\Mail;
use PDOException;

class User{
    private $nom_famille;
    private $prenom;
    private $email;
    private $birthday;
    private $password;
     

    // public function __construct($nom_famille, $prenom, $email, $birthday, $password) {
    //         $bd = new Database();
    //         $this->nom_famille = $nom_famille;
    //         $this->prenom = $prenom;
    //         $this->email = $email;
    //         $this->birthday = $birthday;
    //         $this->password = hash(PASSWORD_DEFAULT, $password);
    // }

    public static function create($data = []){
            $bd = new Database();
            try{
                
                $mailer = new Mail($data['email']);
                $code = $mailer->send();

                //CREATION PARTIELLE DE L'UTILISATEUR
                $req = "INSERT INTO users (nom_famille, prenom, naissance, email, password, created_at, code_email) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $pdo = $bd->pdo();
                $stmt = $pdo->prepare($req);
                
                $result = $stmt->execute([
                    $data['nom_famille'],
                    $data['prenom'],
                    $data['naissance'],
                    $data['email'],
                    $data['password'],
                    date("Y-m-d H:i:s"),
                    (int) $code
                ]);

                $response = $result ?  1 : 0;

                return $response;

            }catch(PDOException $e){
                die('Erreur : '. $e->getMessage());
            }
    }

    public function verify(){
        //
    }

    }

?>