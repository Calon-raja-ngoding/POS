<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesControlle;

Route::get('/', [HomeController::class,'index']);

Route::prefix('category')->group(function(){
    Route::get('/food-beverage',[ProductController::class,'category']);
    Route::get('/beauty-health',[ProductController::class,'category']);
    Route::get('/home-care',[ProductController::class,'category']);
    Route::get('/baby-kid',[ProductController::class,'category']);
});

Route::get('/user/{id}/name/{name}',[UserController::class,'profile']);

Route::get('/sales',[SalesControlle::class,'index']);


