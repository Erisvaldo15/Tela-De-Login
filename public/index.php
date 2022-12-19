<?php

ini_set("display_errors", 1);

session_start();

require_once "../vendor/autoload.php";

use app\core\AppExtract;
use app\core\MyApp;

try {

    

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
    $dotenv->load();

    $myApp = new MyApp(new AppExtract); 
    $myApp->controller();
    $myApp->view();
} 

catch(Throwable $th) {
    echo "<span> {$th->getMessage()} </span>";
}