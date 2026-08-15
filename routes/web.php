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
