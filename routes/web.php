<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/confirm', [UserController::class, 'send']);
Route::post('/confirm', [UserController::class, 'confirm']);
Route::post('/thanks', [UserController::class, 'thanks']);
Route::get('/', [UserController::class, 'verror']);
