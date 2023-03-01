<?php

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

// Route::get("/post", [PostController::class, "index"])->name("post");
// Route::get("/posts/create", [PostController::class, "create"])->name("post_create");
// Route::get("/post/update", [PostController::class, "update"])->name("post_update");
// Route::get("/post/delete", [PostController::class, "delete"])->name("post_delete");
// Route::get("/post/first_or_create", [PostController::class, "first_or_create"])->name("post_fcr");

Route::get("/posts", [PostController::class, "index"])->name("posts");
Route::get("/posts/create", [PostController::class, "post_create"])->name("post_create");
Route::post("/posts/create", [PostController::class, "post_store"])->name("post_store");

Route::get("/posts/{post}", [PostController::class, "post_show"])->name("post_show");
Route::get("/posts/{post}/edit", [PostController::class, "post_edit"])->name("post_edit");
Route::patch("/posts/{post}/update", [PostController::class, "post_update"])->name("post_update");
Route::delete("/posts/{post}/delete", [PostController::class, "post_delete"])->name("post_delete");




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
