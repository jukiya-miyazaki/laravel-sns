<?php

Auth::routes();
Route::get('/', 'ArticleController@index');
//ArticleControllerのindexアクションメソッドを動かす