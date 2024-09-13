<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/brand/list", [BrandController::class, "brandList"])->name("brand.list");
Route::get("/category/list", [CategoryController::class, "categoryList"])->name("category.list");
