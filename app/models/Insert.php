<?php

namespace app\models;

use app\models\Model;
use Throwable;

class Insert extends Model {

    public function insert(string $table, array $fields) {

        try {

            $insert = $this->connection->prepare("INSERT INTO {$table} (name, email, password) VALUES(:name, :email, :password)");

            foreach($fields as $field => $value) {
                $insert->bindValue(":{$field}", $value);    
            }

            return $insert->execute(); // estava retornandfo nada kkkk. 
        }

        catch(Throwable $e) {
            echo "Erro: {$e->getMessage()}";
        }

    }

}