<?php

include '../core/core.php';

chdir(__DIR__ . '/..');

$serviceManagerFunction = \Core\getServiceManagerFunction();

$applicationFunction = \Core\getApplicationFunction();
$applicationFunction(
    $serviceManagerFunction('router'),
    $serviceManagerFunction('controllerManager'),
    $serviceManagerFunction('dispatcher'),
    $serviceManagerFunction,
    $serviceManagerFunction('config'),
    $_SERVER
);
