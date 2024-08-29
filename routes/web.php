<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//ako nga page
Route:: get('/akongpage', function(){
    return view('BisayaSlayer');
});


Route:: get('/home', function(){
    return view('laragon.Index');
})->name('index');

Route:: get('/gallary', function(){
    return view('laragon.gallary');
})->name('gallary');

Route:: get('/services', function(){
    return view('laragon.service');
})->name('services');

Route:: get('/about', function(){
    return view('laragon.about');
})->name('about');


Route:: get('/calcu', function(){
    return view('laragon.calculator');
})->name('calculator');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';




