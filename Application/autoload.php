<?php

set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
    throw new \Exception($errstr, $errno, $errfile, $errline);
});

set_exception_handler(function ($exception) {
    var_dump($exception);
});

spl_autoload_register(function ($class): void {
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
});
