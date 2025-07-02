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

    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",  $this->dbuser, $this->dbpass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Erreur de connexion: '. $e->getMessage());
        }
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

