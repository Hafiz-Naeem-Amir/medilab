<?php
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // ye dusra page hoga (temkhk wala)
});
// Route::get('/deshboard', function () {
//     return view('admin');
// })->name('admin.open');

Route::view('/dashboard', 'admin')->name('admin.open');

Route::get('/setting', function () {
    return view('setting');
})->name('setting.open');

// Route::get('/setting', [SettingController::class, 'create'])->name('settings.index');
Route::post('/submit', [SettingController::class, 'store'])->name('settings.submit');
