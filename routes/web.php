<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\GuestController;


use App\Models\Category;
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

Route::get('/', [PostController::class, 'index'])->middleware('auth');



//halaman single
Route::get('/home/{post:slug}', [PostController::class, 'show']);

Route::get('/Cart', function () {
    // return view('welcome');
    return view('Cart',[
        "title" => "Cart"
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'Home' => $category->Home,
        'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/maintain', [AdminPostController::class, 'index'])->middleware('auth');

Route::get('/guest', [GuestController::class, 'index'])->middleware('guest');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/guest', function () {
    return view('guest');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/logout', function () {
    return view('logout');
});