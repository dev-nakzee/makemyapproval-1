<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\MediaController;

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
Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'home')->name('site.home');
    Route::get('/contact', 'home')->name('site.contact');
    Route::get('/about', 'home')->name('site.about');
});

Route::controller(ServicesController::class)->prefix('admin')->group(function(){
    Route::get('/services', 'index')->name('services.index');
    Route::get('/services/new', 'create')->name('services.create');
    Route::post('/services/save', 'store')->name('services.save');
    Route::get('/services/show/dataTable', 'show')->name('services.table');
    Route::get('/services/edit/{id}', 'edit')->name('services.edit');
    Route::post('/services/update','update')->name('services.update');
    Route::post('/services/delete','destroy')->name('services.remove');
});

Route::controller(DashboardController::class)->prefix('admin')->group(function(){
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});


Route::controller(MediaController::class)->group(function(){
    Route::get('/media/all', 'index')->name('media.index');
    Route::get('/media/show/dataTable', 'show')->name('media.table');
    Route::post('/media/upload/store', 'store')->name('media.upload.store');
    Route::post('/media/delete', 'destroy')->name('media.remove');
    Route::get('/media/list', 'list')->name('media.list');
});