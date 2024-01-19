<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\dashboard;

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

require __DIR__.'/dashboard.php';

Route::get('/', function () {
    return view('website.home');
});

// Route::get('/home' , function(){
//     return view('');
// });

  //Route::get('/slide', 'dashboard\SlideController@index');

Route::get('/dashboard' , function(){
    return view('dashboard.empty');
});
// Route::get('/slide' , function(){
//     return 'ahmed';
// });
