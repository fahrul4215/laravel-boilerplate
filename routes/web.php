<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\CategoryProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

require __DIR__ . '/auth.php';
