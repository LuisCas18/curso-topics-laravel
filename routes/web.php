<?php

use App\Http\Controllers\CourseTopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('course-topics.index');
});