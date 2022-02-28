<?php

namespace OizumiJunho\Conn;

use PDO;
use PDOException;

class Create extends Conn {

    public static function ExeCreate($query) {

        try {

            $conn = Conn::ExeConn();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec($query);

            return $conn->lastInsertId();
            
        } catch (PDOException $e) {
            die("Erro ao criar os dados");
        }

        $conn = null;
    }

}
