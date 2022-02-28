<?php

namespace OizumiJunho\Conn;

use PDO;
use PDOException;

class Conn
{
    public static function ExeConn()
    {

        try {

            $conn = new PDO("mysql:host=" . BDHost . ";dbname=" . BDDatabase, BDUsername, BDPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            die("Erro ao realizar a conexão");
        }
    }
}
