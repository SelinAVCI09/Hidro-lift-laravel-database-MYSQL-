<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PropertyGridController;
use App\Http\Controllers\PropertySingleGridController;
use App\Http\Controllers\PropertyController;

// Ana sayfa
Route::get('/', [IndexController::class, 'index'])->name('index');

// Admin Giriş
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin_login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Admin Home
Route::get('/admin_home', [AdminController::class, 'index'])->name('admin_home');

// Admin Information Routes
Route::get('/admin/information/add', [AdminController::class, 'createInformation'])->name('create_information');
Route::post('/admin/information/store', [AdminController::class, 'storeInformation'])->name('store_information');
Route::get('/admin/information/edit/{id}', [AdminController::class, 'editInformation'])->name('edit_information');
Route::put('/admin/information/update/{id}', [AdminController::class, 'updateInformation'])->name('update_information');
Route::delete('/admin/information/delete', [AdminController::class, 'deleteInformation'])->name('delete_information');

Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property-single');
// Admin Works Routes
Route::get('/admin/works/add', [AdminController::class, 'createWorks'])->name('create_works');
Route::post('/admin/works/store', [AdminController::class, 'storeWorks'])->name('store_works');
Route::get('/admin/works/edit/{id}', [AdminController::class, 'editWorks'])->name('edit_works');
Route::put('/admin/works/update/{id}', [AdminController::class, 'updateWorks'])->name('update_works');
Route::delete('/admin/works/delete', [AdminController::class, 'deleteWorks'])->name('delete_works');

// Frontend Routes
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');

// Works Routes
Route::get('/works', [WorksController::class, 'index'])->name('works.index');
Route::get('/works/{id}', [WorksController::class, 'show'])->name('works.show');

// Property Routes
Route::get('/property-grid', [PropertyGridController::class, 'index'])->name('property-grid');
Route::get('/property-single/{id}', [PropertySingleGridController::class, 'show'])->name('property-single');

Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property-single');
// Çıkış
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
