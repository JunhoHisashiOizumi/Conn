<?php

namespace OizumiJunho\Conn;

use PDO;
use PDOException;

class Update extends Conn {

    public static function ExeUpdate($query) {

        try {

            $conn = Conn::ExeConn();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare($query);
            $stmt->execute();

            return $stmt->rowCount();
            
        } catch (PDOException $e) {
            die("Erro ao atualizar os dados");
        }

        $conn = null;
    }

}
