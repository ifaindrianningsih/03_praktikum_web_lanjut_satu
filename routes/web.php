<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

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

Auth::routes();

//HOME
Route::get('/home', [WelcomeController::class, 'home']);
//PRODUCT
Route::prefix('category')->group(function () {
    Route::get('/{id}', [WelcomeController::class, 'product']);
});
//NEWS
Route::get('/news/{id}', [WelcomeController::class, 'news']) ;
//PROGRAM
Route::prefix('program')->group(function () {
    Route::get('/{id}', [WelcomeController::class, 'program']);;
});
//ABOUT-US
Route::get('/about-us', [WelcomeController::class, 'aboutus']);
//CONTACT-US
Route::resource('contactus', ContactController::class) ;
