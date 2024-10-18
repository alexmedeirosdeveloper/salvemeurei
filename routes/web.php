<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/produto', function () {
    return view('feature');

});
Route::get('/comocomprar', function () {
    return view('buy');

});
Route::get('/produtos', function () {
    return view('products');

});
Route::get('/depoimentos', function () {
    return view('testimonials');

});
Route::get('/faq', function () {
    return view('faq');

});
