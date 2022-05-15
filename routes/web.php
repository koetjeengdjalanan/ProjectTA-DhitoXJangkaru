<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AccountController;
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
Route::get('/blog/{uuid}', [BlogController::class, 'singlePost'])->middleware('auth');
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
})->middleware('auth');

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('auth');
Route::post('/registration', [RegistrationController::class, 'store'])->middleware('auth');
Route::get('/registration/major/{id}', [RegistrationController::class, 'requestMajor'])->name('major.index')->middleware('auth');
Route::get('/registration/requestSSO/{id}', [RegistrationController::class, 'requestSSO'])->name('sso.index');

Route::get('/finduser', [FindUserController::class, 'index'])->middleware('auth');
Route::post('/finduser/delete', [FindUserController::class, 'delete'])->middleware('auth');

Route::get('/user', [AccountController::class, 'index']);
Route::post('/user/passUpdate', [AccountController::class, 'update']);
Route::get('/user/checkCurrent', function () {
    return auth()->user();
});
