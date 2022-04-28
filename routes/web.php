<?php

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

// test

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booksform', function () {
    return view('create_book');
});

Route::post('/books', function () {
    $book = new Book();
    $book->title = request('title');
    $book->author = request('author');
    $book->blurb = request('blurb');
    $book->genre = request('genre');
    $book->save();
});
