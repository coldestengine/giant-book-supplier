<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;


Route::controller(AppController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/detail/{book}', 'detail')->name('book.detail');
    Route::get('/category/{category}', 'category')->name('book.category');
    Route::get('/all/publisher', 'publisher')->name('publisher');
    Route::get('/all/publisher/{publisher}', 'publisherDetail')->name('publisher.detail');
    Route::get('/contact', 'contact')->name('contact');
});