<?php

namespace OizumiJunho\Conn;

use PDO;
use PDOException;

class Read extends Conn {

    public static function ExeRead($query) {

        try {

            $conn = Conn::ExeConn();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $stmt->fetchAll();
            
        } catch (PDOException $e) {
            die("Erro ao ler os dados");
        }

        $conn = null;
    }

}
