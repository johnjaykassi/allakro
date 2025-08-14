<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DemenageController;
use App\Http\Controllers\Admin\BornController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DeathController;
use App\Http\Controllers\Admin\ArrangeController;
use App\Http\Controllers\Admin\DashboadController;
use App\Http\Controllers\Admin\AdminAuthController;

//Login
Route::get("/admin/login",[AdminAuthController::class, "login"] )->name("admin.login");
Route::post("/admin/login", [AdminAuthController::class, "connect"])->name("admin.connection");

//Déconnexion
Route::post("/admin/deconexion", [AdminAuthController::class, "logout"])->name("admin.logout");

Route::get("/admin/dashborad", [DashboadController::class, "index"])->name('admin.dashboard')->middleware("auth");

//Liste Administrateur
Route::get("/admin/list", [AdminController::class, "index"])->name("liste.admin")->middleware("auth");

//Liste naissances
Route::get("/admin/naissances", [BornController::class, "index"])->name("liste.born")->middleware("auth");
Route::put("/admin/naissances/{id}/active", [BornController::class, "active"])->name("active.born")->middleware("auth");

//Liste de décès
Route::get("/admin/décès", [DeathController::class, "index"])->name("liste.death")->middleware("auth");
Route::put("/admin/deces/{id}/active", [DeathController::class, "active"])->name("active.death")->middleware("auth");


//Liste des aménagés
Route::get("/admin/amenages", [ArrangeController::class, "index"])->name("liste.arrange")->middleware("auth");
Route::put("/admin/amenage/{id}/active", [ArrangeController::class, "active"])->name("active.arrange")->middleware("auth");


//Liste des deménagés
Route::get("/admin/demenages", [DemenageController::class, "index"])->name("liste.demenage")->middleware("auth");
Route::put("/admin/demenage/{id}/active", [DemenageController::class, "active"])->name("active.demenage")->middleware("auth");


//Liste des job
Route::get("/admin/job", [JobController::class, "index"])->name("liste.job")->middleware("auth");
Route::put("/admin/job/{id}/active", [JobController::class, "active"])->name("active.job")->middleware("auth");

//Liste des Utilisateurs
Route::get("/utilisateurs", [UserController::class, "index"])->name("users")->middleware("auth");
