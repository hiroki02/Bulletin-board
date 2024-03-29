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

Route::get('/posts', 'PostController@index');
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::post('/posts', 'PostController@store');
//｛ｐost}→何かの値を受け取るのでなんでも対応しちゃう{}があるものは下にやっとくとエラーが起きずらい。
//Routeの次のgetやpostなどはメソッドを示す
//一番左がwebのurlの最後の部分　右の部分がpostcontrollerのshowメソッドに飛んでいる(public function show(Post $post))にあたる