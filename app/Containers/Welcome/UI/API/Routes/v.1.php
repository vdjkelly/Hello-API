<?php

// Default root route
use Illuminate\Support\Facades\Config;

$router->any('/', function () {
    return response()->json(['Welcome to ' . Config::get('api.name') . '.']);
});

