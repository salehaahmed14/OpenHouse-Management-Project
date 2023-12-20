<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EvaluatorController;

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

Route::get('/admindash', [AdminController::class, 'showProjects']);

Route::get('/evaluatordash', [EvaluatorController::class, 'showEvaluatorDash']);

Route::post('/assign-table/{projectId}', [AdminController::class, 'assignTable'])->name('assignTable');

Route::get('/studentdash',[StudentController::class, 'addProject']);

Route::post('/studentdash',[studentController::class,'storeProject']);

Route::get('/studentdash/{user_id}',[studentController::class,'displayProject']);

Route::get('/', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout',[UserController::class,'logout']);


Route::post('/assign-score/{projectId}', [EvaluatorController::class, 'assignScore'])->name('assignScore');

Route::get('/evalchoice',[EvaluatorController::class, 'showChoice']);

Route::get('/evaldash',[EvaluatorController::class, 'showDash'])->name('showdash');


