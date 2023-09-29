<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NykaaController;
use App\Http\Controllers\ProductController;

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
    return view('layout');
})->name('layout-page');


// Use of Name Routes
Route::get('/intro',function(){
     return redirect()->route('layout-page');
     });



Route::get('/list', function () {
    $name=request('n');
    $code=request('c');
    return view('list',['name'=>$name,'code'=>$code]);
    });



Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::fallback(function () {
    return view('error');
});

Route::get('/store', [NykaaController::class, 'index']);