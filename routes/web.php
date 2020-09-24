<?php
Route::group([
    'prefix' => 'change',
    'namespace' => 'Admin'
], function () {
    Route::get('/', 'NewsController@index');
    Route::get('/destroy/{news}', 'NewsController@destroy');
    Route::get('/edit/{news}', 'NewsController@edit');
    Route::post('/update/{news}', 'NewsController@update');
    Route::match(['get', 'post'],'/create', 'NewsController@create');
    Route::match(['get', 'post'],'/store', 'NewsController@store');
});

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
    Route::post('/sign-in', 'IndexController@index');
    Route::post('/sign-up', 'IndexController@signUp');
});

Route::get('/{route}', 'Router\IndexController@index');
