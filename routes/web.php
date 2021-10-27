<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/maskedform', function() {
	return view ('livewireform');
});

<<<<<<< HEAD
=======
Route::group(['middleware' => ['auth:sanctum', 'verified'] ], function()
{
     Route::get('/dashboard', function () {
         return view('dashboard');
     })->name('dashboard');
    
    Route::get('/usuarios/lista', \App\Http\Livewire\Usuarios\Lista::class)->name('usuarios.lista');
     
});
>>>>>>> 19999efb137edf80993065930f1ead46a4f6bb5a
