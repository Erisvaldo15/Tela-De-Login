<?php

function welcome(string $index, string $alternative) {

    if(isset($_SESSION[$index])) {
        return $_SESSION[$index];
    }

    return $alternative;
}