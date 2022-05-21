<?php

namespace app\controllers;

use app\classes\messages\Message;
use app\classes\validation\Validate;
use app\models\Insert;

class Register {

    public array $data = [];
    public string $view;
  
    public function index() {

        $this->view = "register.php";
        
        $this->data = [
            "title" => "Cadastre-se"
        ];

    }

    public function store() {

        $fields = [
             'name' => "s",
             'email' => "e",
             'password' => "s"
        ];

        $validate = Validate::validate($fields);

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT); 

        if(!$validate) {
            redirect("/register");
            return;
        }
        
        if((new Insert)->Insert("clients",$validate)) {
            Message::set("success", "Sua conta foi cadastrada com sucesso");
            return redirect("/register");
        }

    }

}