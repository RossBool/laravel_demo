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


//带组件的路由请求方式
Route::group(['before' => 'auth'], function () {

});
//get请求方式
Route::get('/api/user/{id}', function (\App\User $user) {
    return $user->getAttribute('email');
});

//指定路由方式
Route::match(['GET', 'POST'], '/', function()
{
    return $_SERVER['HTTP_HOST'];
});
//所有的路由方式
Route::any('/',function (){

});

//put方式提交
//在 form 表单里面添加一条 语句，就会访问put请求了
//{{method_field('PUT')}}
//Route::put('users/{id}', function($id) {
//        //
//});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
//get带参数路由请求
    Route::get('/user_id/{id}', function ($id) {
        return $id;
    });
    Route::get('/user_id', function ($id) {
        return $id;
    });
});

