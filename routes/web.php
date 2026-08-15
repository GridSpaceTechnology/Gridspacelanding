<?php

use App\Http\Controllers\NotifySubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::post('/notify-me', [NotifySubscriberController::class, 'store'])->name('notify-me');

Route::get('/js/app.js', function () {
    return response(file_get_contents(resource_path('js/app.js')), 200, [
        'Content-Type' => 'application/javascript; charset=UTF-8',
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->name('app-js');
