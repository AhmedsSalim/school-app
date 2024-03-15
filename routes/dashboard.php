<?php

use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\Dashboard\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Dashboard" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function () {


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('slider', SliderController::class);

Route::get('/setting/index', [SettingController::class , 'index'])->name('setting.index');
Route::put('/setting/update', [SettingController::class , 'update'])->name('settings.update');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';