<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;

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




Route::group(['prefix'=>'admin'],function(){

    

Route::group(['middleware'=>'admin.guest'],function(){

    Route::get('/login',[AdminLoginController::CLass,'index'])->name('admin.login');
    Route::post('/authanticate',[AdminLoginController::CLass,'authanticate'])->name('admin.authanticate');

});



Route::group(['middleware'=>'admin.auth'],function(){

    Route::get('/dashboard',[HomeController::CLass,'index'])->name('admin.dashboard');
    Route::get('/logout',[HomeController::CLass,'logout'])->name('admin.logout');
    

});



});