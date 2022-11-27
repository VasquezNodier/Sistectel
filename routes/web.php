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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('web.index');
});

Route::get('about', function () {
    return view('web.about');
});

Route::get('services', function () {
    return view('web.services');
});

Route::get('projects', function () {
    return view('web.projects');
});

Route::get('contact', function () {
    return view('web.contact');
});
