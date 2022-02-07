<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/home", [HomeController::class, "index"])->name("home");


Route::get("/p/about-us", [HomeController::class, "about"])->name("about");
Route::get("/p/contact-us", [HomeController::class, "contact"])->name("contact");
Route::get("/p/privacy-policy", [HomeController::class, "privacy"])->name("privacy");
Route::get("/p/terms-and-conditions", [HomeController::class, "terms"])->name("terms");

Route::get("/auth/login", [UserController::class, "login"])->name("login");
Route::get("/auth/signup", [UserController::class, "signup"])->name("signup");
Route::get("/auth/password_reset", [UserController::class, "password_reset"])->name("password_reset");