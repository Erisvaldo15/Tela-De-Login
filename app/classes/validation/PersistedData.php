<?php

namespace app\classes\validation;

class PersistedData {

    public static function get(string $field) {

        if(isset($_SESSION['persisted'][$field])) {
            
            $value = $_SESSION['persisted'][$field];
            unset($_SESSION['persisted'][$field]); // estava message em vez de session rs.

            return $value;
        }

    }

    public static function set(string $field, string $value) {

        if(!isset($_SESSION['persisted'][$field])) {
            $_SESSION['persisted'][$field] = $value;
        }

    }

}