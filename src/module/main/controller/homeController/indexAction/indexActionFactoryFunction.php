<?php

return
    function (callable $serviceManagerFunction) {
        $indexAction    = include 'indexAction.php';
        $sampleFunction = $serviceManagerFunction('sampleFunction');

        return $indexAction($sampleFunction);
    };