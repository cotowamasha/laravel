<?php

Route::get('/', 'News\IndexController@index')->name('home');

Route::get('/{route}', 'Router\IndexController@index');

Route::get('/category/{categoryName}', 'News\CategoryController@index');

Route::get('/news/{id}', 'News\IndexController@show');
