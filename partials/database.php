<?php

namespace Partials;

use PDO;
use PDOException;

class Database{
    private $host = "localhost";
    private $dbname= "facebook";
    private $dbuser = "root";
    private $dbpass = "";
    private $pdo;

    public function __contruct(){
        try{
            $pdo = new PDO('mysql:'.$this->host.';dbname='.$this->dbname.';charset=utf-8',  $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Erreur de connexion: '. $e->getMessage());
        }

        $this->pdo = $pdo;
    }

    public function pdo(){
        return $this->pdo;
    }

    public function setDBname($name){
        $this->dbname = $name;
    }

    public function setDBhost($host){
        $this->host = $host;
    }
}

