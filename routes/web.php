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

Route::get('/home', function () {
    $navbar = ['Home', 'About Me', 'Contacts'];
    
    return view('home', compact ('navbar'));
});

Route::get('/about-me', function () {
    $name = 'Fra';
    $job = 'Junior web dev';
    $articles =['learn php', 'learn laravel' ,'learn js', 'learn vuejs'];
    return view('about-me', compact('name', 'job', 'articles'));
});

