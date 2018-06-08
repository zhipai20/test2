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


//  /对应的URL：locaohost/
//  该路由将匹配get方法
Route::get('welcome', function () {
    return view('welcome');
});

//URL: localhost/user/name 对应的调用控制器User对应的named方法
Route::get('/user/index', 'UserController@index')->name('index');
//将路由路径先指向中间层进行过滤判断，在进行相应的跳转。
Route::get('/young/{age}', 'UserController@young')->middleware('young');

////基本路由配置修改
////   test对应的URL:localhost/test
//Route::get('/test01', function () {
//    return 'test page';
//});
//
////该路由将匹配post方法
//Route::post('/test02', function () {
//    return view('welcome');
//});
//
////
//Route::match(['get', 'post'],'/foo', function () {
//    // 该路由将匹配 get 和 post 方法的 'foo' url
//});
//Route::any('/foo', function() {
//    // 该路由将匹配 所有 类型的 'foo' url
//});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/{id}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::patch('/articles/{id}', 'ArticlesController@update')->name('articles.update');
Route::delete('/articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');
