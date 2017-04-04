<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function(){
    return view('blog.post');
})->name('blog.post');

Route::get('about', function(){
    return view('other.about');
})->name('other.about');

Route::get('admin', function(){
    return view('admin.index');
})->name('admin.index');

Route::get('admin/create', function(){
    return view('admin.create');
})->name('admin.create');

Route::get('admin/edit/{id}', function(){
    return view('admin.edit');
})->name('admin.edit');