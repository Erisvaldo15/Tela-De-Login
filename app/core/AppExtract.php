<?php

namespace app\core;

use app\interfaces\AppInterface;

class AppExtract implements AppInterface {

    private int $methodNotExist;

    public function controller(): string {
        return ControllerExtract::extract();
    }

    public function method($controller): string {
        [$method, $methodNotExist] =  MethodExtract::extract($controller);
        $this->methodNotExist = $methodNotExist;
        return $method;
    }

    public function parameters(): array {
        return ParametersExtract::extract($this->methodNotExist);
    }

}