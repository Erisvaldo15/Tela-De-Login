<?php

namespace app\core;

use app\classes\Uri;

class MethodExtract {

    public static function extract($controller): array {

        $uri = Uri::uri();
        $method = 'index';
        $methodNotExist = 2;

        if(isset($uri[1])) {
            $method = strtolower($uri[1]);
        }

        if(empty($method)) {
            $method = 'index';
        }

        if(!method_exists($controller, $method)) {
            $method = 'index';
            $methodNotExist = 1;
        }

        return [
            $method, $methodNotExist
        ];

    }

}