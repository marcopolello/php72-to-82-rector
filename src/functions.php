<?php

function legacyFunction($name = null)
{
    // comportamento esplicito per compatibilità con PHP 7.2
    if ($name === null) {
        $name = 'guest';
    }

    return 'Hello ' . $name;
}