<?php

ini_set("display_errors", 1);

session_start();

require_once "../vendor/autoload.php";

use app\core\AppExtract;
use app\core\MyApp;

try {
    $myApp = new MyApp(new AppExtract); 
    $myApp->controller();
    $myApp->view();
} 

catch(Throwable $th) {
    echo "<span> {$th->getMessage()} </span>";
}