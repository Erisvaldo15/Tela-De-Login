<?php

namespace app\core;

use app\classes\Uri;

class ControllerExtract {

    public static function extract() {

        $uri = Uri::uri();     
        $controller = 'Home';

        if(isset($uri[0]) && $uri[0] !== '') {
            $controller = ucfirst($uri[0]);
        }

        $namespace = "app\\controllers\\".$controller; 

        if(class_exists($namespace)) {
            $controller = $namespace; // o problema era aqui rs, não tem um return
        }

        return $controller; // caso não exista a classe, ele retorna o controller home...
    }

}