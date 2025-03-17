<?php

use App\Http\Controllers\UserController;
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

Route::group(["prefix" => "users", "controller" => UserController::class], function(){
    Route::get("/list", "list")->name("users.list");
    Route::get("/create", "createForm");
    Route::post("/create", "store")->name("users.store");
    Route::get("/update/{user}", "updateForm")->name("users.updateForm");
    Route::post("/update/{user}", "update")->name("users.update");
    Route::delete("/delete/{user}", "delete")->name("users.delete");
});

