<?php

namespace app\controllers;

use app\models\Select;

class Travels {

    public function index() {

        $travels = (new Select)->findAll("travels");
        
        $this->view = "travels.php";
        
        $this->data = [
            "title" => "camp.io - Travels",
            "travels" => $travels
        ];

    }

    public function edit(array $args) {
        var_dump($args);
    }

}