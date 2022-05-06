<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Models\BlogPosts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/blog/{uuid}', [BlogController::class, 'singlePost']);
// Route::get('/categories/{category}', [CategoryController::class, 'index']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Blog Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        // 'posts' => $category->blogPosts,
        'posts' => $category->blogPosts->sortByDesc('updated_at')
    ]);
});
