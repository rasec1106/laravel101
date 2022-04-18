<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});
// New route to show a message
Route::get('/hello', function(){
    return "Hello world";
});
// Instead of using a function as the second parameter we can use the keyword view
Route::view('direct-view', 'myview',['name'=>'Cesar']);

/**
 * To make a new controller we use this command: `php artisan make:controller {controller_name}`
 */
// Calling a controller
Route::get('/controller',[TestController::class, 'show']);
/**
 * First we set the url, then an array that contains the controller class and the function
 */
Route::get('/controller2',[TestController::class, 'expert']);