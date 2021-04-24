<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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

Route::group(['namespace' =>'frontend'], function (){
Route::get('home', [HomeController::class, 'index']);
    });

Route::group(['namespace' =>'backend'], function (){
Route::get('dashboard', [DashboardController::class, 'index']);
    });


    
 Route::get('user', 'ManagementUseController@index');

   // Route::get('user'), 'ManagementUserController@index');
   Route::resource('user','ManagementUserController');

  
  
Route::get("/home", function () {
    return view("home");
});