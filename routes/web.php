<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // verifique se esta logado
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    return redirect()->route('presentes');
});

Route::get('/test-permission-admin', function () {
    return "voce tem permissao de admin";
})
    ->middleware('auth', 'can:admin');

Route::get('/test-permission-default', function () {
    return "voce tem permissao de default";
})->middleware('auth', 'can:default');

Route::prefix('dashboard')
    ->middleware(['auth', 'can:admin', 'verified'])
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/convidados', function () {
            return view('dashboard');
        })->name('dashboard.convidados');

        Route::get('/presentes', function () {
            // return view('presentes');
            return view('dashboard-presentes');
        })->name('dashboard.presentes');
    });


Route::get("/presentes", [App\Http\Controllers\ProductController::class, 'index'])
    ->middleware('auth', 'can:default')
    ->name('presentes');

Route::post('/presentes', [App\Http\Controllers\ProductController::class, 'selectProduct'])
    ->middleware('auth', 'can:default')
    ->name('select-product');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
