<?php

use App\Http\Controllers\AsignController;
use App\Http\Controllers\TaskController;
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
    return view('welcome');
});
Route::resource("tasks", TaskController::class);
Route::get("asign", [AsignController::class, 'index'])->name('asign.index');
Route::post("asign/{id}/store", [AsignController::class, 'store'])->name('asign.store');
Route::post("asign/addTask", [AsignController::class, 'addTask'])->name('asign.addTask');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
