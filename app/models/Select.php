<?php

namespace app\models;

use Throwable;
use PDO;

class Select extends Model {

    public function findAll(string $table, $fields = '*') {

        try {
            
            $findAll = $this->connection->query("SELECT {$fields} FROM {$table}");
            $findAll->execute();

            return $findAll->fetchAll(PDO::FETCH_ASSOC);
        }


        catch(Throwable $th) {

        }

    }

    public function findBy(string $table, string $value, string $field, string $fields = '*') {

        try {

            $findBy = $this->connection->prepare("SELECT {$fields} FROM {$table} WHERE {$field} = :{$field}");
            $findBy->bindValue($field, $value);
            $findBy->execute();

            return $findBy->fetchAll(PDO::FETCH_ASSOC);
        }

        catch(Throwable $th) {

        }

    }
    
}