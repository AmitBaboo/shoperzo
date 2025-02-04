<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;
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




Route::group(['prefix'=>'admin'],function(){

    

Route::group(['middleware'=>'admin.guest'],function(){

    Route::get('/login',[AdminLoginController::CLass,'index'])->name('admin.login');
    Route::post('/authanticate',[AdminLoginController::CLass,'authanticate'])->name('admin.authanticate');

});



Route::group(['middleware'=>'admin.auth'],function(){

    Route::get('/dashboard',[HomeController::CLass,'index'])->name('admin.dashboard');
    Route::get('/logout',[HomeController::CLass,'logout'])->name('admin.logout');

    //Categories Routes
    Route::get('/categories/create',[CategoryController::CLass,'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    //Categories Routes


    //Slug Routes
    Route::get('/getSlug',function(Request $request){
        $slug = '';

        if(!empty($request->title)){
            $slug = Str::Slug($request->title);
        }

        return response()->json([
            'status'    =>  true,
            'slug'    =>   $slug
        ]);

    })->name('getSlug');
     //Slug Routes


});



});