<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
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
    Route::get("/create", "createForm")->name("users.createForm");
    Route::get("/update/{user}", "updateForm")->name("users.updateForm");

    Route::post("/store", "store")->name("users.store");

    Route::delete("/delete/{user}", "delete")->name("users.delete");
});

Route::group(["prefix" => "reservations", "controller" => ReservationController::class], function(){

    Route::get("/list", "list")->name("reservations.list");
    Route::get("/create", "createForm")->name("reservations.createForm");
    Route::get("/update/{reservation}", "updateForm")->name("reservations.updateForm");

    Route::post("/store", "store")->name("reservations.store");

    Route::delete("/delete/{reservation}", "delete")->name("reservations.delete");
});

Route::group(["prefix" => "tables", "controller" => TableController::class], function(){

    Route::get("/list", "list")->name("tables.list");
    Route::get("/create", "createForm")->name("tables.createForm");
    Route::get("/update/{table}", "updateForm")->name("tables.updateForm");

    Route::post("/store", "store")->name("tables.store");

    Route::delete("/delete/{table}", "delete")->name("tables.delete");
});

