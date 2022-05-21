<?php

namespace app\classes\private;

use app\classes\private\Block;
use app\interfaces\ControllerInterface;

class BlockNotLogged {

    public static function block(ControllerInterface $controllerInterface, array $blockMethods) {
        $blockMethods = Block::blockToMethods($controllerInterface, $blockMethods);

        if(!isset($_SESSION['user']) && $blockMethods) {
            return redirect('/');
        }

    }
}