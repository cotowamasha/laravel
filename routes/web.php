<?php

Route::get('/', 'News\IndexController@index')->name('home');

Route::match(['get', 'post'],'/create', 'Admin\IndexController@create');

Route::get('/category/{categoryName}', 'News\CategoryController@index');

Route::get('/news/{id}', 'News\IndexController@show');

Route::get('/{route}', 'Router\IndexController@index');
