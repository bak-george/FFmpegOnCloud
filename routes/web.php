<?php

use App\Http\Controllers\FFmpegTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ffmpeg-test', [FFmpegTestController::class, 'test']);
