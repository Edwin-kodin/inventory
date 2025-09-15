<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('get-users', [UserController::class, 'getUser']);
