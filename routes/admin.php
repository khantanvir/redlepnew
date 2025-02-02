<?php

use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Project\ProjectController;
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
Route::controller(ProjectController::class)->group(function () {
    Route::get('create-project', 'create');
    Route::post('create-project-data-post', 'store');
    Route::get('all-project', 'all_project');
    Route::get('get-project/{id?}', 'get_project');
});
