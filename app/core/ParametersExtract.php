<?php

namespace app\core;

use app\classes\Uri;

class ParametersExtract {

    public static function extract($methodNotExist) {

        $uri = Uri::uri();
        $countUri = count($uri);

        return array_slice($uri, $methodNotExist, $countUri);   
    }

}