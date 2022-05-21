<?php

namespace app\models\database;

use PDO;
use PDOException;

class Connection {

    public static function connection() {

        try {
            return new PDO("mysql:host=localhost; dbname=camp_io", "root", "erisvaldo123", [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]);
        }

        catch(PDOException $e) {
            echo "Ops, algo não está certo {$e->getMessage()}";
        }

    }

}