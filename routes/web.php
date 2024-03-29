<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;


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

Route::domain('{account}.localhost')->group(function () {
    Route::get("/", function($account){
        try {
            return File::get(public_path($account.'/index.php'));   
        } catch (FileNotFoundException $e) {
            abort(404); 
        }
    });
});

Route::domain('ubiqua.uninassau.com.br')->group(function () {
    Route::get("/", function(){
        try {
            return File::get(public_path('uninassau/index.php'));   
        } catch (FileNotFoundException $e) {
            abort(404); 
        }
    });
});

Route::domain('ubiqua.unama.br')->group(function () {
    Route::get("/", function(){
        try {
            return File::get(public_path('unama/index.php'));   
        } catch (FileNotFoundException $e) {
            abort(404); 
        }
    });
});

Route::domain('ubiqua.uninorte.com.br')->group(function () {
    Route::get("/", function(){
        try {
            return File::get(public_path('uninorte/index.php'));   
        } catch (FileNotFoundException $e) {
            abort(404); 
        }
    });
});


Route::domain('ubiqua.ung.com.br')->group(function () {
    Route::get("/", function(){
        try {
            return File::get(public_path('ung/index.php'));   
        } catch (FileNotFoundException $e) {
            abort(404); 
        }
    });
});
