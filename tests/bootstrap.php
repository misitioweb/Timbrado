<?php

declare(strict_types=1);

// report all errors
error_reporting(-1);

// require composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

call_user_func(function () {
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
});
