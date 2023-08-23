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

//Auth Routes
Auth::routes();

//General Routes
Route::get('/', function () {
    return view('index');
});
Route::get('/AboutUs', function () {
    return view('about_us');
})->name('about');
Route::get('/ContactUs', function () {
    return view('contact_us');
}) ->name('contact');

//Student Module Routes
Route::prefix('student/')->name('student.')->middleware(['auth' , 'user-role:student'])->controller(\App\Http\Controllers\StudentsController::class)->group(function () {
    Route::get('home', 'index')->name('home');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('application_status', 'application_status')->name('application_status');
});

Route::prefix('enquiries/')->name('enquiries.')->middleware(['auth' , 'user-role:student'])->controller(\App\Http\Controllers\EnquiriesController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
});



//Admin Module Routes
Route::prefix('admin/')->name('admin.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('dashboard', 'index')->name('home');
    Route::get('update_profile', 'updateProfile')->name('update_profile');
    Route::post('store/{id}', 'store')->name('store');
});

Route::prefix('applications/')->name('applications.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\ApplicationsController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('update/{id}', 'update')->name('update');
});

Route::prefix('admin/packages/')->name('admin.packages.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\PackagesController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('students/')->name('students.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\StudentsController::class)->group(function () {
    Route::get('index', 'show')->name('index');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('enquiries/')->name('enquiries.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\EnquiriesController::class)->group(function () {
    Route::get('all', 'show')->name('all');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::get('update/{id}', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

Route::prefix('manage/')->name('manage.')->middleware(['auth' , 'user-role:admin'])->controller(\App\Http\Controllers\PagesInfoController::class)->group(function () {
    Route::get('history', 'manageHistory')->name('history');
    Route::post('history/update/{id}', 'updateHistory')->name('history.update');
    Route::get('contact_page', 'contactPage')->name('contact_page');
    Route::post('contact_page/update/{id}', 'updateContactPage')->name('contact_page.update');
});
