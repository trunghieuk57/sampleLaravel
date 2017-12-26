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
// Route::get('/',function(){
//     $data = DB::table('users')->get();
//     print_r($data);
// });

Route::get('/welcome',function(){
    return 'Chào mừng các bạn';
});
Route::get('/input', function () {
    return view('FormRequest');
});
Route::get('get-form',['uses'=> 'HandleController@index']);
Route::post('handle-form',['uses'=> 'HandleController@handleRequest']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post( 'logintest', 'TestController@check');