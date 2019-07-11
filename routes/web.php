<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index/test',"TestController@index");
//文件上传oss
Route::get('/vedio',"TestController@vedio");

//视频展示
Route::get('/list',"ListController@list");
