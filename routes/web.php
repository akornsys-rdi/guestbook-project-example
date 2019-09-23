<?php

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
    return view('main');
})->name("index");

Route::get('escribir', function () {
    return view('form');
})->name("create");

Route::post('escribir', function () {
    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'title' => 'required',
        'message' => 'required|min:6'
    ]);

    return view('form', ['form_valid' => 'validated']);
});
