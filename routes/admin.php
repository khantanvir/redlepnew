<?php

use App\Http\Controllers\Index\IndexController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Testimonial\TestimonialController;


Route::middleware(['auth'])->group(function () {
    
    
});

Route::controller(TestimonialController::class)->group(function () {
    Route::get('add-testimonial', 'add');
    Route::post('add-testimonial-data-post', 'add_post');
});