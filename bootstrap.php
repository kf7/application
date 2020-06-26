<?php

// Composer autoload modules
$autoloader = require(__DIR__ . '/vendor/autoload.php');

$app = new Kohana\Application\Module();

if (PHP_SAPI === 'cli') {
    // ...
} else {
    //
}
