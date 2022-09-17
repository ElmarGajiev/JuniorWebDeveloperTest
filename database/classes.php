<?php
spl_autoload_register (function ($class) {
    $class = strtolower($class);
    $class = str_replace("\\", "/", $class);
    $path = __DIR__."/classes/".$class."_class.php";
    if (file_exists($path)){
        require_once $path;
    }
});