<?php

use App\Http\Controllers\ProfileController;
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
//GET

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','welcome');
Route::get('/chirps', function() {
    return 'Welcome to our chirps page';
})->name('chirps.index');

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//POST
// Route::post();
//PUT
// Route::put();
//DELETE    
// Route::delete();
