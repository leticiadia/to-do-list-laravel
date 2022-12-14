<?php

use App\Http\Controllers\TasksController;
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

Route::get('/', [TasksController::class, 'index'])->name('tasks');

Route::get('/create-task', [TasksController::class, 'create'])->name('tasks.create');
Route::post('/task', [TasksController::class, 'store'])->name('tasks.store');

Route::get('/task/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
Route::put('/task/{task}', [TasksController::class, 'update'])->name('tasks.update');

Route::delete('/task/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');
