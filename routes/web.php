<?php

use App\Http\Controllers\voetballersController;
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

Route::get('/', [voetballersController::class, 'index']);

Route::get('spelers/{voetbal}/delete', [voetballersController::class, 'delete'])
    ->name('spelers.delete');

Route::resource('spelers', voetballersController::class);
