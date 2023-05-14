<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/hello', function () {
    // return view('welcome');
    return 'Hellow World';
 });
*/
// Creating a route
/* 
Route::get('/about', function(){
    return view('pages/about');
});
*/

 // creating a dynamic route
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is '.$name.'id'.$id;

}); 

//routing the page using a controller
// in new version we need to give the full path to controller file
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/append', 'App\Http\Controllers\PagesController@append');
/*
this will automatically create routes according to controller
this will list all routes 'php artisan route:list'
*/
Route::resource('post', 'App\Http\Controllers\PostController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
