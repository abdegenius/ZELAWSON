<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/home', [HomeController::class, "index"])->name("home");
Route::get('/p/about-us', [HomeController::class, "about"])->name("about");
Route::get('/p/contact-us', [HomeController::class, "contact"])->name("contact");
Route::get('/p/privacy-policy', [HomeController::class, "privacy"])->name("privacy");
Route::get('/p/terms-and-conditions', [HomeController::class, "terms"])->name("terms");

Route::get('/auth/login', [UserController::class, "login"])->name("login")->middleware("guest");
Route::get('/auth/signup', [UserController::class, "signup"])->name("signup")->middleware("guest");
Route::get('/auth/reset-password', [UserController::class, "reset_password"])->name("reset.password")->middleware("guest");
Route::post('/auth/login', [UserController::class, "post_login"])->name("post.login")->middleware("guest");
Route::post('/auth/signup', [UserController::class, "post_signup"])->name("post.signup")->middleware("guest");
Route::post('/auth/reset-password', [UserController::class, "post_reset_password"])->name("post.reset.password")->middleware("guest");


Route::get('/account/profile', [UserController::class, "profile"])->name("profile")->middleware("auth");
Route::post('/account/profile', [UserController::class, "post_profile"])->name("post.profile")->middleware("auth");
Route::get('/account/change-password', [UserController::class, "change_password"])->name("change.password")->middleware("auth");
Route::post('/account/change-password', [UserController::class, "post_change_password"])->name("post.change.password")->middleware("auth");
Route::get('/account/logout', [UserController::class, "logout"])->name("logout")->middleware("auth");


Route::get('/property/all', [PropertyController::class, "all"])->name("property.all");
Route::get('/property/view/{slug}', [PropertyController::class, "view"])->name("property.view");
Route::get('/property/for/rent', [PropertyController::class, "rent"])->name("property.rent");
Route::get('/property/for/sell', [PropertyController::class, "sell"])->name("property.sell");

Route::get('/wishlists', [WishlistController::class, "index"])->name("wishlists")->middleware("auth");
Route::get('/property/wishlist/{id}', [WishlistController::class, "add"])->name("wishlist.add")->middleware("auth");

Route::get('/chats', [ChatController::class, "index"])->name("chats")->middleware("auth");
Route::get('/chat/new/{id}/{pid}', [ChatController::class, "add"])->name("chat.add")->middleware("auth");
Route::get('/chat/{chat_id}', [ChatController::class, "view"])->name("chat.view")->middleware("auth");
Route::get('/chat/delete/{chat_id}', [ChatController::class, "delete"])->name("chat.delete")->middleware("auth");

Route::post('/send/message', [MessageController::class, "post_send_message"])->name("post.send.message")->middleware("auth");
Route::get('/view/message/{chat_id}', [MessageController::class, "view_message"])->name("view.message")->middleware("auth");

Route::get('/search', [SearchController::class, "index"])->name("get.search");
Route::get('/advanced_search', [SearchController::class, "advanced"])->name("get.advanced.search");