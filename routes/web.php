<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\grupsController;
use App\Http\Controllers\admin\productesController;
use App\Http\Controllers\admin\symistprodController;
use App\Http\Controllers\admin\grupsatribeditController;
use App\Http\Controllers\grupsadminController;
use App\Http\Controllers\editattribController;
use App\Http\Controllers\editdescrController;
use App\Http\Controllers\editgrupdescrController;
use App\Http\Controllers\symistController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\searchprodController;
use App\Http\Controllers\admin\associatedproductController;
use App\Http\Controller\admin\ImageControllr;
use App\Http\Controller\admi\editusergrupsController;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', [HomeController::class, 'index'])->name('HomeAdmin');

Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/', [HomeController::class, 'index'])->name('HomeAdmin');
        Route::get('/product', [ProductController::class, 'list'])->name('productlist'); 
        Route::get('/grups', [grupsController::class, 'list'])->name('grupslist');
        Route::get('/symistgrups', [symistController::class, 'list'])->name('symistlist');
        Route::get('/product/{category_id}', [ProductController::class, 'showCategory'])->name('showCategory');
        Route::resource('/productes', 'admin\productesController');
        Route::resource('/grup', 'grupsadminController');
        Route::resource('/edittatrib', 'editattribController');
        Route::resource('/editdescr', 'editdescrController');
        Route::resource('/editgrupdescr', 'editgrupdescrController');
        Route::resource('/symistprod', 'admin\symistprodController');
        Route::resource('/grupsatrib', 'admin\grupsatribeditController');
        Route::resource('/associatedproduct', 'admin\associatedproductController');
	Route::resource('/edituser', 'admin\editusergrupsController');
        Route::get('/image', 'ImageUploadController@imageUpload')->name('image.upload');
        Route::post('/image', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
	Route::resource('/images', 'admin\ImageControllr');
        Route::get('/searchprod', [searchprodController::class, 'searchprod'])->name('searchprod');
});
