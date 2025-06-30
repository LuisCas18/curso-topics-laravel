<?php

use App\Http\Controllers\CourseTopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('course-topics', CourseTopicController::class);