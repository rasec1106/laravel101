<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// New route to show a message
// If we want to get the url variables (query params) we add the Request inside the function
Route::get('/hello', function(Request $request){
    return "Hello world".$request->get('variable');
});
// Instead of using a function as the second parameter we can use the keyword view
Route::view('direct-view', 'myview',['name'=>'Cesar']);

/**
 * To make a new controller we use this command: `php artisan make:controller {controller_name}`
 * First we set the url, then an array that contains the controller class and the function
 */
// Calling a controller
Route::get('/controller',[TestController::class, 'show']);
// We also can add the query params here
Route::get('/params/{id}',[TestController::class, 'params']);
// If a param is "optional" we can put a ? after the param
Route::get('/blog/{slug}/{id?}',[TestController::class, 'blog']);