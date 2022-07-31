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

// display home page
Route::get('/', function () {

    return view('homePage');
}); 

// test a connection to the database
Route::get('/dbconn', function () {
    
        if(DB::connection()->getPdo())
        echo "successfully connected to DB";  
    
}); 

// loop with unlimited categories beetwen view and this route
 Route::get('/{p}', function ($slug) {

    return view('categoriesPage', [
        'category_count' => $slug
    ]);
      });

// store image from admin
Route::get('/image/images','App\Http\Controllers\CategoryImage@index');
Route::post('/image/add','App\Http\Controllers\CategoryImage@store');
