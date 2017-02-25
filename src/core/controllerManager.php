<?php

namespace Core;

return function ($module, $controller, $action, $services) {
    $module = include 'module/' . $module . '/module.php';

    return $module($controller, $action, $services);
};
