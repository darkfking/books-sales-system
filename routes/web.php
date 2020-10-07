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

Route::get('/', function () {
    $books = DB::table('books')->paginate(10);
    return view('welcome', compact('books'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('books/create', [
    'uses' => 'BooksController@create',
    'as' => 'books.create'
]);

Route::post('books/store', [
    'uses' => 'BooksController@store',
    'as' => 'books.store'
]);

Route::get('books/show/{book}', [
    'uses' => 'BooksController@show',
    'as' => 'books.show'
]);

Route::get('books/edit/{book}', [
    'uses' => 'BooksController@edit',
    'as' => 'books.edit'
]);

Route::put('books/{book}', [
    'uses' => 'BooksController@update',
    'as' => 'books.update'
]);
