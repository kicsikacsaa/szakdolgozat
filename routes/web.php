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

    Route::post("/create", "create")->name("users.create");
    Route::post("/update/{user}", "update")->name("users.update");


    Route::delete("/delete/{user}", "delete")->name("users.delete");
});

Route::group(["prefix" => "reservations", "controller" => ReservationController::class], function(){

    Route::get("/list", "list")->name("reservations.list");
    Route::get("/create", "createForm")->name("reservations.createForm");
    Route::get("/update/{reservation}", "updateForm")->name("reservations.updateForm");

    Route::post("/create", "create")->name("reservations.create");
    Route::post("/update/{reservation}", "update")->name("reservations.update");

    Route::delete("/delete/{reservation}", "delete")->name("reservations.delete");
});

Route::group(["prefix" => "tables", "controller" => TableController::class], function(){

    Route::get("/list", "list")->name("tables.list");
    Route::get("/create", "createForm")->name("tables.createForm");
    Route::get("/update/{table}", "updateForm")->name("tables.updateForm");

    Route::post("/create", "create")->name("tables.create");
    Route::post("/update/{table}", "update")->name("tables.update");
        

    Route::delete("/delete/{table}", "delete")->name("tables.delete");
});

