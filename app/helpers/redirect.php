<?php

function redirect(string $path) {
    header("location: $path");
}