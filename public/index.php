<?php

use Exan\Landviz\Landviz;

require __DIR__ . '/../vendor/autoload.php';

if (
    php_sapi_name() == 'cli-server'
    && $_SERVER["REQUEST_URI"] !== '/'
    && file_exists(__DIR__ . '/../' . $_SERVER["REQUEST_URI"])
) {
    return false;
}

new Landviz();
