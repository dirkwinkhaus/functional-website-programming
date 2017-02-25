<?php

namespace Core;

return function ($layout, $module, $template, $viewVariables) {
    ob_start();

    include $layout;
    $layout = ob_get_clean();

    $viewVariableManager = function ($key) use ($viewVariables) {
        return (isset($viewVariables[$key])) ? $viewVariables[$key] : null;
    };

    include 'module/' . $module . '/view/' . $template . '.php';
    $template = ob_get_clean();

    return str_replace('<!--###template###-->', $template, $layout);
};
