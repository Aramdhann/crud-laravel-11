<?php

use Illuminate\Support\Facades\Route;

Route::resource('/products', \App\Http\Controllers\ProductController::class);
