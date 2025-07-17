<?php
namespace Controller;

use Partials\Database;
use PDO;
use PDOException;

require_once __DIR__ . '/../vendor/autoload.php';

class Post{
    public static function create($data = []){
        $bd = new Database();
        try{
            
            //CREATION D'UN POST
            $req = "INSERT INTO posts (description, file, date, id_user) VALUES (?, ?, ?, ?)";
            $pdo = $bd->pdo();
            $stmt = $pdo->prepare($req);
            
            $result = $stmt->execute([
                $data['description'],
                $data['file'],
                date('Y-m-d H:i:s'),
                46
            ]);

            $response = $result ?  1 : 0;

            return $response;

        }catch(PDOException $e){
            die('Erreur : '. $e->getMessage());
        }
        unset($bd);
    }

    public static function all(){
        $bd = new Database();

        try{
            $req = "SELECT * FROM posts LIMIT 10";
            $pdo = $bd->pdo();

            $stmt = $pdo->prepare($req);
            $stmt->execute();

            $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $posts;

        }catch(PDOException $e){
            die('Erreur : '. $e->getMessage());
        }
    }


}