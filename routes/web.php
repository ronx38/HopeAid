<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'dashboard'])->name('dashboardPage');

Route::get('/register', [LoginAndRegisterController::class, 'registerPage']);
Route::post('/register', [LoginAndRegisterController::class, 'registerInsert']);
Route::get('/login', [LoginAndRegisterController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginAndRegisterController::class, 'loginInsert']);
Route::get('/logout', [MainController::class, 'logout']);

//Kalo belom login, ga bisa akses route dibawah
Route::middleware(['auth'])->group(function () {
    Route::get('/form/{id}', [FormController::class, 'formPage'])->name('form');
    Route::post('/form/{id}', [FormController::class, 'formInsert']);

    Route::get('/documentation', [MainController::class, 'documentationPage']);
    Route::get('/article', [MainController::class, 'articlePage']);
    Route::get('/support', [MainController::class, 'supportPage']);
    Route::get('/support/FAQ', [MainController::class, 'FAQPage']);
});

//Route dibawah hanya bisa diakses oleh akun yang punya role admin
Route::middleware(['auth', 'admin'])->group(function () {
    //Dashboard Route
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin_dashboard');
    Route::get('/admin/create-donation', [AdminController::class, 'createDonation']);
    Route::post('/admin/create-donation', [AdminController::class, 'insertDonation']);
    Route::post('/admin/delete-donation/{id}', [AdminController::class, 'deleteDonation']);
    Route::get('/admin/update-donation/{id}', [AdminController::class, 'updateDonationPage']);
    Route::post('/admin/update-donation/{id}', [AdminController::class, 'updateDonation']);

    //Documentation Route
    Route::get('/admin/documentation', [AdminController::class, 'documentPage'])->name('documentation_page');
    Route::get('/admin/documentation/create-documentation', [AdminController::class, 'createDocum']);
    Route::post('/admin/documentation/create-documentation', [AdminController::class, 'insertDocumentation']);
    Route::post('/admin/documentation/create-documentation/{id}', [AdminController::class, 'deleteDocumentation']);
    Route::get('/admin/documentation/update-documentation/{id}', [AdminController::class, 'updateDocumPage']);
    Route::post('/admin/documentation/update-documentation/{id}', [AdminController::class, 'updateDocumentation']);

    //Account Page
    Route::get('/admin/documentation/all-accounts', [AdminController::class, 'allAccountsPage']);

    //Jenis Donasi
    Route::get('/donasi', 'App\Http\Controllers\DonasiController@index')->name('index.index');
    route::get('/donasi/create', 'App\Http\Controllers\DonasiController@create')->name('index.create');
    route::post('/donasi/store', action: 'App\Http\Controllers\DonasiController@store')->name('index.store');
    route::get('/donasi/edit{id}', 'App\Http\Controllers\DonasiController@edit')->name('index.edit');
    route::put('/donasi/update{id}', 'App\Http\Controllers\DonasiController@update')->name('index.update');
    route::delete('/donasi/delete{id}', 'App\Http\Controllers\DonasiController@destroy')->name('index.destroy');

    //List of Uang
    Route::get('/admin/list-of-uang', [AdminController::class, 'UangPage']);

    //List of Barang
    Route::get('/admin/list-of-barang', [AdminController::class, 'BarangPage']);
});
