<?php
namespace Controller;

use Partials\Database;
use PDOException;

require_once __DIR__ . '/../vendor/autoload.php';

class Post{
        public static function create($data = []){
            $bd = new Database();
        try{
            
            
            //CREATION D'UN POST
            $req = "INSERT INTO posts (description, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $pdo = $bd->pdo();
            $stmt = $pdo->prepare($req);
            
            $result = $stmt->execute([
                $data['nom_famille'],
                $data['prenom'],
                $data['naissance'],
                $data['email'],
                $data['password'],
                date("Y-m-d H:i:s")
            ]);

            $response = $result ?  1 : 0;

            return $response;

        }catch(PDOException $e){
            die('Erreur : '. $e->getMessage());
        }
        unset($bd);
    }
}