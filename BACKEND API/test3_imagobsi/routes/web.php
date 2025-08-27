<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('/feedback', FeedbackController::class);
