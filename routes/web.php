<?php

use Illuminate\Foundation\Auth\RegistersUsers;

Route::group([
    'prefix' => 'change',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'is_admin']
], function () {
    Route::get('/', 'NewsController@index');
    Route::get('/destroy/{news}', 'NewsController@destroy');
    Route::get('/edit/{news}', 'NewsController@edit');
    Route::post('/update/{news}', 'NewsController@update');
    Route::match(['get', 'post'],'/create', 'NewsController@create');
    Route::match(['get', 'post'],'/store', 'NewsController@store');
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/{user}', 'UsersController@update');
});

Route::get('/admin', 'Admin\IndexController@index')->middleware(['auth', 'is_admin']);

Route::match(['post', 'get'], '/profile', 'Users\ProfileController@update')->middleware('auth');

Route::group([
    'namespace' => 'News'
], function () {
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/news/{news}', 'IndexController@show');
    Route::get('/category/{categoryName}', 'CategoryController@index');
});
Route::group([
    'namespace' => 'Auth'
], function () {
    Route::get('/sign-in', 'IndexController@index');
    Route::get('/sign-up', 'IndexController@signUp');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');
    Route::post('register', 'RegisterController@register');
});

Route::get('/{route}', 'Router\IndexController@index');
