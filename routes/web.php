<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, "index"])->name("login");

Route::group(["prefix" => "dashboard", "as" => "dashboard."], function () {
  Route::get("/", [DashboardController::class, "index"])->name("index");
});

Route::group(["prefix" => "api", "as" => "api."], function () {
  Route::group(["prefix" => "auth", "as" => "auth."], function () {
    Route::post("/login", [AuthController::class, "login"]);
  });
});
