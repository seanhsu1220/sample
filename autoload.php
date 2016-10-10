<?php

spl_autoload_register(function($className) {
    if(strpos($className, '\\') !== false) {
        // psr-4
        $className = ltrim($className, '\\');
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        require_once __DIR__ . '/' . $fileName . '.php';
    } else {
        // normal class
        require_once $className;
    }
});