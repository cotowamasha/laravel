<?php

Route::get('/', 'News\IndexController@index')->name('home');

Route::match(['get', 'post'],'/create', 'Admin\NewsController@create');

Route::get('/change', 'Admin\NewsController@index');
Route::get('/change/destroy/{news}', 'Admin\NewsController@destroy');
Route::get('/change/edit/{news}', 'Admin\NewsController@edit');
Route::post('/change/update/{news}', 'Admin\NewsController@update');

Route::get('/category/{categoryName}', 'News\CategoryController@index');

Route::get('/news/{news}', 'News\IndexController@show');

Route::get('/{route}', 'Router\IndexController@index');
