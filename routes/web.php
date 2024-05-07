<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TrainerController;
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

Route::get('/trainer',[TrainerController::class,'index'])->name('all.trainers');
Route::get('/addtrainer',[TrainerController::class,'create'])->name('create.trainer');
Route::post('/savetrainer',[TrainerController::class,'store'])->name('store.trainer');
Route::get('/addreport/{id}',[TaskController::class,'create'])->name('add.report');
Route::post('/addtask',[TaskController::class,'store'])->name('store.task');
Route::get('/task/trainer/{id}',[TaskController::class,'trainerTask'])->name('task.trainer');
Route::get('/task/filter',[TaskController::class,'taskFilter'])->name('task.filter');
Route::get('/all/reports',[TaskController::class,'allReport'])->name('all.report');
Route::get('/task/allfilter',[TaskController::class,'taskallFilter'])->name('task.allfilter');
Route::get('/trainer/{id}/edit',[TrainerController::class,'edit'])->name('trainer.edit');
Route::put('trainer/{id}/update',[TrainerController::class,'update'])->name('update.trainer');
Route::delete('trainer/{id}/delete',[TrainerController::class,'destroy'])->name('trainer.destroy');