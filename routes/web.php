<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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
// irj3ouli les pages front auth (traj3li f les pages  fazet guest t5alih kanou connecter mayrahomch les pages hakomm)
Route::get('/', [UserController::class,'showRegister'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class,'showLogin'])->name('login');

// yt3mlou m3a back

Route::post('/', [UserController::class,'postRegister'])->name('register')->middleware('guest');
Route::post('/login', [UserController::class,'postLogin'])->name('login')->middleware('guest');


Route::post('/logout', [UserController::class,'logout'])->name('logout')->middleware('auth'); 

Route::get('/home', [TaskController::class,'showhome'])->name('index')->middleware('auth');

Route::delete('/task/{id}', [TaskController::class,'destroy'])->name('destroy.task')->middleware('auth');

Route::put('/{id}', [TaskController::class,'completeTask'])->name('complete.task')->middleware('auth'); 

Route::get('/completedTask', [TaskController::class,'completed_tasks'])->name('completed_tasks')->middleware('auth');
Route::get('/active', [TaskController::class,'active_tasks'])->name('active_tasks')->middleware('auth');

Route::group( ['prefix'=>'home','middleware' =>'auth'],function() {
    // get pages
    
    Route::get('/create', [TaskController::class,'create'])->name('create.task'); 
    Route::get('/{id}', [TaskController::class,'edit'])->name('edit.task');
    //  
    //  
    // back
    Route::post('/create', [TaskController::class,'store'])->name('store.task');
   
    Route::put('/{id}', [TaskController::class,'update'])->name('update.task');
    
   
});


