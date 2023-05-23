<?php

use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('index');
});

// ===================================================================
// ======================== FORM REGISTRATION ========================
// =================================================================== 
Route::resource('registration_form', RegistrationController::class);
Route::get('home', [RegistrationController::class, 'index'])->name('home');

