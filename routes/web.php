<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemenageController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\Admin\BornController;
use App\Http\Controllers\Admin\DeathController;
use App\Http\Controllers\Admin\ArrangeController;

Route::get("/", [HomeController::class, "index"])->name('home');

Route::get("/borns", [BornController::class, "c_index"])->name('born');
Route::get("/ajout/nouveau_ne", [BornController::class, "create"])->name('create.born')->middleware("auth");
Route::post("/store/born", [BornController::class, "store"])->name('store.born')->middleware("auth");



Route::get("/deces", [DeathController::class, "c_index"])->name('death');
Route::get("/ajout/deces", [DeathController::class, "create"])->name('create.death')->middleware("auth");
Route::post("/store/deces", [DeathController::class, "store"])->name('store.death')->middleware("auth");


Route::get("/amenagement", [ArrangeController::class, "c_index"])->name('arrange');
Route::get("/ajout/amenagement", [ArrangeController::class, "create"])->name('create.arrange')->middleware("auth");
Route::post("/store/amenagement", [ArrangeController::class, "store"])->name('store.arrange')->middleware("auth");


Route::get("/demenagement", [DemenageController::class, "c_index"])->name('demenage');
Route::get("/ajout/demenagement", [DemenageController::class, "create"])->name('create.deme')->middleware("auth");
Route::post("/store/demenagement", [DemenageController::class, "store"])->name('store.deme')->middleware("auth");


Route::get("/job", [JobController::class, "c_index"])->name('job');
Route::get("/ajout/job", [JobController::class, "create"])->name('create.job')->middleware("auth");
Route::post("/store/job", [JobController::class, "store"])->name('store.job')->middleware("auth");


Route::get("/inscription", [AuthController::class, "register"])->name('register');
Route::post("/inscription", [AuthController::class, "store"])->name('store.user');

Route::get("/connexion", [AuthController::class, "login"])->name('login');
Route::post("/auth", [AuthController::class, "auth"])->name('login.user');

Route::post("/logout", [AuthController::class, "logout"])->name('logout');


Route::get("/profil", [ProfileController::class, "index"])->name("profil")->middleware("auth");
Route::get("/editer", [ProfileController::class, "edit"])->name("profil.edit")->middleware("auth");
Route::put("/update", [ProfileController::class, "update"])->name("profil.update")->middleware("auth");

Route::get("/pharmacies", [PharmacyController::class, "index"])->name('pharmacies.index')->middleware("auth");
Route::get("/pharmacies/create", [PharmacyController::class, "create"])->name('pharmacies.create')->middleware("auth");
Route::post("/pharmacies", [PharmacyController::class, "store"])->name('pharmacies.store')->middleware("auth");




