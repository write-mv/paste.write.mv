<?php

use App\Http\Controllers\PastesController;
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

Route::view('/', 'create')->name('home');
Route::post('/', [PastesController::class, 'post']);
Route::get('{paste}', [PastesController::class, 'show'])->name('show');
Route::get('{paste}/raw', [PastesController::class, 'raw'])->name('raw');
Route::get('fork/{paste}', [PastesController::class, 'edit'])->name('edit');
Route::post('fork/{paste}', [PastesController::class, 'fork']);
