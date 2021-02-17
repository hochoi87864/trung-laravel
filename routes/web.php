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

Route::get('/hello-world', function () {
    return view('test.helloworld');
});

Route::get('/happy-new-year-2021',function () {
    echo "<h1>An khang, Thịnh vượng, Vạn sự như ý, Có người yêu, Lương tăng nhanh, có ngành tay trái nữa ^^</h1>";
});

Route::get('/logging', 'LoggingController@index');


