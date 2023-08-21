<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/AboutUs', function () {
    return view('about_us');
})->name('about');

Route::get('/ContactUs', function () {
    return view('contact_us');
}) ->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth'])->name('home');

Route::prefix('student/')->name('student.')->middleware(['auth'])->controller(\App\Http\Controllers\StudentsController::class)->group(function () {
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('application_status', 'application_status')->name('application_status');
});

Route::prefix('enquiries/')->name('enquiries.')->middleware(['auth'])->controller(\App\Http\Controllers\EnquiriesController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');

});





//Route::get('/admission', [App\Http\Controllers\ApplicationsController::class, 'create'])->middleware(['auth'])->name('admission');
