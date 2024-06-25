<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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



Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::post("/uploadpacket",[AdminController::class,"uploadpacket"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewpacket",[AdminController::class,"viewpacket"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::get("/updatepacket/{id}",[AdminController::class,"updatepacket"]);

Route::post("/updatefoodpacket/{id}",[AdminController::class,"updatefoodpacket"]);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/deletepacket/{id}",[AdminController::class,"deletepacket"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/remove/{id}",[HomeController::class,"remove"]);

Route::get("/orders",[AdminController::class,"orders"]);

Route::get("/search",[AdminController::class,"search"]);

Route::get('/bestseller/{tags}', [HomeController::class, 'bestseller']);
Route::get('/signature/{tags}', [HomeController::class, 'signature']);
Route::get('/oriental/{tags}', [HomeController::class, 'oriental']);


Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
