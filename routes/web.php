<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return 'Page World';
})->name('home');
Route::get('/shop', function () {
    return 'Page Shop';
});
Route::get('/about', function () {
    return 'Page about';
});
Route::get('/contact', function () {
    return 'Page contact';
});
Route::post('/post', function () {
    echo 'Method post';
});
Route::put('/put', function () {
    return 'Method put';
});
Route::prefix('admin')->group(function () {
    Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return "Post ID: $postId, Comment ID: $commentId";
    
    });
    Route::get('users/{name?}', function ($name = 'John') {
        return $name;
    });
    });
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post ID: $postId, Comment ID: $commentId";

});
Route::get('users/{name?}', function ($name = 'John') {
    return $name;
});