<?php

use App\Http\Controllers\website\ImagesPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\AboutSchoolController;
use App\Http\Controllers\website\AdmissionController;
use App\Http\Controllers\website\AcademicsController;
use App\Http\Controllers\website\StudentLifeController;
use App\Http\Controllers\website\ContactController;

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
require __DIR__.'/dashboard.php';

Route::get('/', function () {
    return view('website.home');
})->name('home');

Route::prefix('about')->controller(AboutSchoolController::class)->group(function(){
    Route::get('/principal-message' ,  'indexPrincipalMessage')->name('principal-message.index');
});
Route::prefix('admission')->controller(AdmissionController::class)->group(function () {
    Route::get('/policy', 'indexPolicy')->name('policy.index');
    Route::get('/School-fees', 'indexSchoolFees')->name('school-fees.index');
});

Route::prefix('academics')->controller(AcademicsController::class)->group(function () {
    Route::get('/the-curriculum', 'indexCurriculum')->name('curriculum.index');
    Route::get('/learning-environment', 'indexLearningEnvironment')->name('learning-environment.index');
    Route::get('/planning', 'indexPlanning')->name('planning.index');
});

Route::get('/images-page' , [ImagesPageController::class , 'index'])->name('images-page.index');
Route::get('/student-life' , [StudentLifeController::class , 'index'])->name('student-life.index');
Route::get('/contact' , [ContactController::class , 'index'])->name('contact.index');


