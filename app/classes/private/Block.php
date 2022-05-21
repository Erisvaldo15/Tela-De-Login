<?php

namespace app\classes\private;

use app\interfaces\ControllerInterface;

class Block {

   public static function blockToMethods(ControllerInterface $controllerInterface, array $blockMethods) {

      $methods = get_class_methods($controllerInterface);
      
   }
}