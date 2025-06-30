<?php

use App\Http\Controllers\CourseTopicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('course-topics', CourseTopicController::class);
