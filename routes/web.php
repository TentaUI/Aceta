<?php

use App\Livewire\Docs;
use App\Livewire\Home;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([], static function (Router $route) {
    $route->get('/', Home::class)->name('tenta.home');

    $route->get('docs/{any}', Docs::class)->where('any', '.*')->name('tenta.docs');
});
