<?php

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DeleteController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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


Route::get("/posts", IndexController::class)->name("posts");
Route::get("/posts/create", CreateController::class)->name("post_create");
Route::post("/posts/create", StoreController::class)->name("post_store");

Route::get("/posts/{post}", ShowController::class)->name("post_show");
Route::get("/posts/{post}/edit", EditController::class)->name("post_edit");
Route::patch("/posts/{post}/update", UpdateController::class)->name("post_update");
Route::delete("/posts/{post}/delete", DeleteController::class)->name("post_delete");




Route::get("/", function () {
    return view("vpn");
});
Route::get("/quiz", function () {
    return view("quiz");
});

// /*
Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("home");
// */
