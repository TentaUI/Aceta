<?php

use App\Livewire\Docs;
use App\Livewire\Home;
use App\Livewire\Blog;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([], static function (Router $route) {
    $route->get('/', Home::class)->name('tenta.home');
    $route->get('blog/{any?}', Blog::class)->where('any', '.*')->name('tenta.blog');
    $route->get('docs/{any?}', Docs::class)->where('any', '.*')->name('tenta.docs');
});
