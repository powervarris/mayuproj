<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/announcement', function () {
    return view('announcement');
})->name('announcement');

Route::get('/officials', function () {
    return view('officials');
})->name('officials');





Route::get('/services', function () {
    return view('services');
})->name('services');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/blotter', function () {
        return view('blotter');
    })->name('blotter');

    Route::get('/application', function () {
        return view('application');
    })->name('application');


Route::get('admin/profile', function () {
    return dd('admin profile page');
});
});

Route::get('/blogs',[UserController::class,'index'])->middleware(UserMiddleware::class);
Route::get('/blogs-create',[UserController::class,'create'])->middleware(AdminMiddleware::class);
Route::get('/blogs/{id}', [UserController::class, 'show'])->middleware(UserMiddleware::class);
Route::post('/blogs', [UserController::class, 'store']);
Route::get('/blogs/{id}/edit', [UserController::class, 'edit'])->middleware(AdminMiddleware::class);
Route::put('/blogs/{id}', [UserController::class, 'update']);
Route::get('/usercreate', [UserController::class, 'userCreate']);
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/showblog/{id}', [UserController::class, 'showBlog'])->name('showBlog');
Route::get('/editblog/{id}', [UserController::class, 'editBlog'])->name('editBlog');
Route::put('/updateblog/{id}', [UserController::class, 'updateBlog'])->name('updateBlog');
