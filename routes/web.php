<?php

use App\Http\Controllers\GoatController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('goats', GoatController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function() {
        return view('admin.admin-panel');
    })->name('administration')->middleware('is_admin');

});

Route::get('/admin', function () {
    return view('admin.admin-panel');
})->name('admin')->middleware('is_admin');

Route::get('/test-livewire', function() {
    return view('counter-container');
});