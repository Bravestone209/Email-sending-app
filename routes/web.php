<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mail_controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(mail_controller::class)->group(function(){

    Route::get('mail','mail')->name('mail');

    Route::post('mail1','mail1')->name('mail1');

});