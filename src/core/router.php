<?php

namespace Core;

return function ($uri) {
    $routingData = include 'config/routing.php';

    foreach ($routingData as $key => $value) {
        preg_match($key, $uri, $matches);

        if (!empty($matches)) {
            return $value;
        }
    }

    return null;
};
