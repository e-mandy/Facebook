<?php

namespace Controller;

require_once __DIR__ . '/../vendor/autoload.php';


use Partials\Database;
use Controller\Mail;
use PDO;
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
        unset($bd);
    }

    public static function where($champ, $email){
        $bd = new Database();

        try{
            $req = "SELECT * FROM Users WHERE ". $champ . "= ?";

            $pdo = $bd->pdo();
            $stmt = $pdo->prepare($req);
            $stmt->execute([$email]);
            
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            
            return $data;
        
        }catch(PDOException $e){
            die('Erreur: '. $e->getMessage());
        }

        unset($bd);
    }

    public static function update($id){
        $bd = new Database();

        try{
            $req = "UPDATE Users SET updated_at = ?, status = ? WHERE id = ?";
            $pdo = $bd->pdo();

            $stmt = $pdo->prepare($req);
            $result = $stmt->execute([
                date('Y-m-d H:i:s'),
                1,
                $id
            ]);

            return $result;

        }catch(PDOException $e){
            die('Erreur: '. $e->getMessage());
        }
    }

}

?>