<?php

namespace app\controllers;

use app\classes\messages\Message;
use app\classes\private\BlockNotLogged;
use app\classes\validation\PersistedData;
use app\classes\validation\Validate;
use app\interfaces\ControllerInterface;
use app\models\Select;

class Login implements ControllerInterface {

    public $data = [];
    public $view;

    public function __construct()
    {
        BlockNotLogged::block($this, ['store', 'index']);
    }

    public function index(array $args) {  
        
        $this->view = "login.php";
        $this->data = [
            "title" => "camp.io"
        ];

    }

    public function store() {

        $fields = [
            "email" => "e",
            "password" => "s"
        ];

        $validate = Validate::validate($fields);

        if(!$validate) {
            redirect("/login");
            return;
        }

        $userFound = (new Select)->findBy("clients", $validate['email'], "email", "email,password");

        if(!$userFound) {
            Message::set("email", "E-mail invalid");
            PersistedData::set("email", $validate['email']);
            return redirect("/login");
        }
    
       if(!password_verify($validate['password'], $userFound[0]['password'])) {
            Message::set("password", "Password invalid");
            PersistedData::set("password", $validate['password']);
            PersistedData::set("password", $validate['password']);
            return redirect("/login");
       }

       echo "Deu certo!";
    }

    public function edit(array $args) {

    }

    public function show(array $args) {
        
    }
    
    public function update(array $args) {
        
    }

    public function destroy(array $args) {   
        session_destroy();
        redirect('/login');
    }
    
}