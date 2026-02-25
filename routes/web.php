<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('component.pages.about');
});

Route::get('/contact', function () {
    return view('component.pages.contact');
});
Route::get('/shopnow', function () {
    return view('component.pages.shopnow');
});
Route::get('/signup', function () {
    return view('component.pages.signup');
});
Route::get('/login', function () {
    return view('component.pages.login');
});
Route::get('/bridalhill', function () {
    return view('component.pages.bridalhill');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/categories', function () {
    return view('admin.categories');
});
Route::get('/products', function () {
    return view('admin.products');
});
Route::get('/orders', function () {
    return view('admin.orders');
});
Route::get('/inventory', function () {
    return view('admin.inventory');
});
Route::get('/users', function () {
    return view('admin.users');
});