<?php

use Illuminate\Support\Facades\Request;

function active_class($route, $class)
{
    return Request::is($route) ? $class : null;
}
