<?php

use App\Http\Controllers\Home\HomeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('about-us', 'about')->name('about_us');
});
