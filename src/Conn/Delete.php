<?php

namespace OizumiJunho\Conn;

use PDO;
use PDOException;

class Delete extends Conn {

    public static function ExeDelete($query) {

        try {

            $conn = Conn::ExeConn();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec($query);

            return $conn->lastInsertId();
            
        } catch (PDOException $e) {
            die("Erro ao deletar os dados");
        }

        $conn = null;
    }

}
