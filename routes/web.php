<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-permission-admin', function () {
    return "voce tem permissao de admin";
})
    ->middleware('auth', 'can:admin');

Route::get('/test-permission-default', function () {
    return "voce tem permissao de default";
})->middleware('auth', 'can:default');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(
    ['auth', 'can:admin', 'verified']
)->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
