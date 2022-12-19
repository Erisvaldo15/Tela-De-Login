<?php

namespace app\models\database;

use PDO;
use PDOException;

class Connection {

    public static function connection() {

        try {
            return new PDO("mysql:host={$_ENV['DATABASE_HOST']}; dbname={$_ENV['DATABASE_NAME']}", 
            "{$_ENV['DATABASE_USER']}", "{$_ENV['DATABASE_PASSWORD']}", [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]);
        }

        catch(PDOException $e) {
            echo "Ops, algo não está certo {$e->getMessage()}";
        }

    }

}