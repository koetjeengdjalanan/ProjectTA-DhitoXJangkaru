<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindUserController;
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

Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
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

Route::get('/registration', [RegistrationController::class, 'index']);
Route::post('/registration/administration', [RegistrationController::class, 'store']);

Route::get('/finduser', [FindUserController::class, 'index']);
