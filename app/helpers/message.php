<?php

use app\classes\messages\Message;

function message(string $key) {
    
    $message = Message::get($key);

    if(isset($message)) {
        return $message;
    }

}