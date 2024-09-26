<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', function (Request $request) {
    return Product::all();
});

Route::get('/categories', function (Request $request) {
    return Category::all();
});

Route::get('/categories/{category}/products', function (Request $request, Category $category) {
    return $category->products;
});

Route::get('/products/{product}/category', function (Request $request, Product $product) {
    return $product->category;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
