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
Route::get('/test','Test\TestController@test');
Route::get('/curl1','Test\TestController@curl1');
Route::get('/accessToken','Test\TestController@accessToken');
Route::get('/cuPost','Test\TestController@cuPost');
Route::post('/register','Test\TestController@register');
Route::get('/menu','Test\TestController@menu');
Route::get('/encryption','Test\TestController@encryption');  //加密
Route::get('/rsa','Test\TestController@rsa');  //非对称加密
Route::get('/st','Test\TestController@st');  //签名
Route::get('/pay','Test\TestController@pay');  //签名