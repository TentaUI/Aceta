<?php

use App\Livewire\Home;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([], static function (Router $router) {
    $router->get('/', Home::class);
});
