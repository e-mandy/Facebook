<?php

use Partials\Database;
use Partials\Mail;

class User{
    private $nom_famille;
    private $prenom;
    private $email;
    private $birthday;
    private $password;
    

    public function __construct($nom_famille, $prenom, $email, $birthday, $password) {
            $bd = new Database();
            $this->nom_famille = $nom_famille;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->birthday = $birthday;
            $this->password = hash(PASSWORD_DEFAULT, $password);

            try{

                $mailer = new Mail($this->email);
                $code = $mailer->send();

                //CREATION PARTIELLE DE L'UTILISATEUR
                $req = "INSERT INTO Users (nom_famille, prenom, naissance, email, password, created_at, code_email) VALUES ? ? ? ? ? ?";
                $stmt = $bd->pdo()->prepare($req);
                $stmt->execute([
                    $nom_famille,
                    $prenom,
                    $birthday,
                    $email,
                    $password,
                    date('Y-m-d H-i-s'),
                    $code
                ]);

                

            }catch(PDOException $e){
                die('Erreur :'. $e->getMessage());
            }
    }

    public function verify(){
        //
    }

    }

?>