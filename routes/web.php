<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.home');
});

Route::get('/home', function () {
    return view('homepage.home');
});
//ADMIN
// Route::middleware(['checkLoggedIn'])->group(function () {
//Home
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

//ADMIN Post Category
Route::get('/admin/post-categories', [PostCategoryController::class, 'index'])->name('postC.index');
Route::get('/admin/post-categories/create', [PostCategoryController::class, 'create'])->name('postC.create');
Route::post('/admin/post-categories/store', [PostCategoryController::class, 'store'])->name('postC.store');
Route::get('/admin/post-categories/edit/{id}', [PostCategoryController::class, 'edit'])->name('postC.edit');
Route::delete('/admin/post-categories/delete/{id}', [PostCategoryController::class, 'destroy'])->name('postC.destroy');
Route::post('/admin/post-categories/update/{id}', [PostCategoryController::class, 'update'])->name('postC.update');

//ADMIN Post
Route::get('/admin/post', [PostController::class, 'index'])->name('post.index');
Route::get('/admin/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/admin/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/admin/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::delete('/admin/post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::post('/admin/post/update/{id}', [PostController::class, 'update'])->name('post.update');


//ADMIN Login & Register
Route::get('/admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('/admin/check-email', [RegisterController::class, 'checkEmail'])->name('check.email');
Route::post('/admin/check-username', [RegisterController::class, 'checkUsername'])->name('check.username');
Route::post('/admin/register/submit', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/submit', [LoginController::class, 'login'])->name('login.submit');

//File Manager
Route::get(
    '/file-manager',
    function () {
        return view('file-manager');
    }
)->name('file-manager');
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
