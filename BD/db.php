<?php

class BD{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = '127.0.0.1:33065';
        $this->db       = 'artistas';
        $this->user     = 'root';
        $this->password = 'root';
        $this->charset  = 'utf8mb4';
    }

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];

            $pdo = new PDO($connection,$this->user,$this->password,$options);

            return $pdo;

        } catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
          }
        }
    }
?>

