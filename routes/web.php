<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebinarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webinars', [WebinarController::class, 'get_webinars']);