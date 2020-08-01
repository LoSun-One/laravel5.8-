<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('admin/login','admin\LoginController@index');//登录界面
Route::post('admin/login','admin\LoginController@login');//提交登录
Route::group(['prefix' => 'admin' ,'namespace'=>'admin'], function () {

    Route::get('/home','HomeController@index');//提交登录
    Route::get('/setself','MySelfController@index');//提交登录
    Route::post('/save','MySelfController@save');//信息修改
    Route::get('/write','WriteController@index');//写
    Route::get('/article','Article@index');//写
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录
    // Route::post('/login','LoginController@login');//提交登录

















});


