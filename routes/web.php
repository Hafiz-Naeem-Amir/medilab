<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');   // ye aapki form wali file hogi
});


Route::get('/dashboard', function () {
    return view('dashboard'); // ye dusra page hoga (temkhk wala)
})->name('dashboard.name');
Route::get('/Adminpannel', function () {
    return view('admin.admin_pannel');
})->name('admin_pannel.name');
