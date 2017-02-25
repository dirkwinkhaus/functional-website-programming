<?php

namespace Config;

return [
    'router'            => \Core\getRouterFunction(),
    'controllerManager' => \Core\getControllerManagerFunction(),
    'dispatcher'        => \Core\getDispatcherFunction(),

    // config array
    'config'            => include 'config/config.php',

    // own function
    'sampleFunction'    => include 'module/main/service/sampleFunction.php',
];