<?php

namespace app\controllers;

use app\interfaces\ControllerInterface;

class Home implements ControllerInterface {

    public string $view;
    public array $data = [];
   
    public function index(array $args) {

        $this->data = ["title" => "camp.io - travels"];
        $this->view = "home.php";
    }

    public function edit(array $args) {

    }

    public function show(array $args) {
        
    }
    
    public function update(array $args) {
        
    }

    public function store() {
        
    }

    public function destroy(array $args) {
        
    }

}