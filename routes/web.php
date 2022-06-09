<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TrainerController;
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
    return view('login');
});

Route::get("/client/login", [ClientController::class, "login"])->name("client.login");  
Route::post("/client/index", [ClientController::class, "index"])->name("client.index");  
Route::get("/client/form", [ClientController::class, "create"])->name("client.form");  
Route::post("/client/store", [ClientController::class, "store"])->name("client.store");  
Route::get("/client/delete", [ClientController::class, "delete"])->name("client.delete");  
Route::get("/client/sessions", [ClientController::class, "sessions"])->name("client.sessions");  


Route::get("/session/create", [SessionController::class, "create"])->name("session.create");  
Route::post("/session/store", [SessionController::class, "store"])->name("session.store");  
Route::get("/session/edit", [SessionController::class, "edit"])->name("session.edit");  
Route::post("/session/update", [SessionController::class, "update"])->name("session.update");  



Route::post("/trainer/index", [TrainerController::class, "index"])->name("trainer.index");  

