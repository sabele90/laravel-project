<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome')->name('welcome');
// });

// Route::get('/chirps', function() {
//     return 'Welcome to our chirps page';
// })->name('chirps.index');

// Route::get('/service', function () {
//     return 'Welcome to our services page';
// });

// Route::get('/hgjghjkhkhjlkhjl', function () {
//     return 'Welcome to our tweets page';
// })->name('chirps.index');

// Route::get('/chirps/{chirp}', function ($chirp) {
//     return 'Welcome to our chirps page'. $chirp;
// });

// Route::get('/chirps/{chirp?}', function ($chirp = null) {
//     return 'Welcome to our chirps page -'. $chirp;
// });

// Route::get('/chirps/{chirp}', function ($chirp) {
//     if ($chirp === '2'){
//         return redirect()->route('chirps.index');
//     }
//     return 'Chirp detail'. $chirp;
// });

// Route::get('/chirps/{chirp}', function ($chirp) {
//     if ($chirp === '2'){
//         return to_route('chirps.index');
//     }
//     return 'Chirp detail'. $chirp;
// });
DB::listen(function ($query) {
    dump($query->sql);
});

Route::view('/','welcome'); 

Route::middleware('auth')->group(function () {

    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::get('/chirps',[ChirpController::class, 'index'])->name('chirps.index');
    Route::get('/chirps/{chirp}/edit',[ChirpController::class,'edit'])->name('chirps.edit');
    Route::post('/chirps',[ChirpController::class,'store'])->name('chirps.store');
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update'])->name('chirps.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


