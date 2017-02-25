<?php

namespace Core;

return function ($key) {
    /**
     * @param array  $array
     * @param string $key
     * @param null   $default
     *
     * @return callable
     */
    $getArrayKeyOrDefault = function (array & $array, $key, $default = null)
    {
        return (isset ($array[$key])) ? $array[$key] : $default;
    };

    $services = include 'config/service.php';

    return $getArrayKeyOrDefault($services, $key);

};