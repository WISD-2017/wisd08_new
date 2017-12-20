<?php
use App\Http\Middleware\CheckAge;
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
})->middleware(CheckAge::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/xin/x1',function (){
   return view('xin.x1');
});

Route::get('/xin/x2',function (){
    return view('xin.x2');
});

Route::get('/xin/x3',function (){
    return view('xin.x3');
});

Route::get('/su/s1',function (){
    return view('su.s1');
});

Route::get('/su/s2',function (){
    return view('su.s2');
});

Route::get('/wei/w1',function (){
    return view('wei.w1');
});

Route::get('/wei/w2',function (){
    return view('wei.w2');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
