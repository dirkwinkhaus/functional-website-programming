<?php

return function (callable $sampleFunction)
{
    return [
        'variable' => 'value',
        'service' => $sampleFunction(),
    ];
};