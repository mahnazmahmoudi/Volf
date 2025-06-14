<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [PanelController::class, 'index'])->name('admin.dashboard');
    Route::resource('services', ServiceController::class);
});





/* Home Layout */
Route::group([], function () {
    Route::get('/', [HomeController::class, 'home'])->name('volf');
    Route::get('services/{service:slug}', [HomeController::class, 'singleService'])->name('single.service');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');


});

require __DIR__.'/auth.php';
