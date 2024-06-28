<?php

use Illuminate\Support\Facades\Route; // Mengimpor facade Route untuk mendefinisikan rute web
use App\Http\Controllers\HomeController; // Mengimpor HomeController untuk mengatur rute terkait halaman home
use App\Http\Controllers\AdminController; // Mengimpor AdminController untuk mengatur rute terkait admin

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

Route::get("/", [HomeController::class, "index"]); // Rute untuk halaman utama, menggunakan metode index dari HomeController
Route::get("/home", [HomeController::class, "index"]); // Rute untuk halaman home, juga menggunakan metode index dari HomeController

Route::get("/users/{order?}/{sort?}", [AdminController::class, "user"]); // Rute untuk melihat pengguna, dengan parameter opsional untuk pengurutan

Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]); // Rute untuk menghapus menu berdasarkan ID

Route::get("/foodmenu/{order?}/{sort?}", [AdminController::class, "foodmenu"]); // Rute untuk melihat menu makanan, dengan parameter opsional untuk pengurutan

Route::post("/uploadfood", [AdminController::class, "upload"]); // Rute untuk mengunggah makanan baru

Route::post("/update/{id}", [AdminController::class, "update"]); // Rute untuk memperbarui item berdasarkan ID

Route::post("/reservation", [AdminController::class, "reservation"]); // Rute untuk membuat reservasi baru

Route::post("/uploadpacket", [AdminController::class, "uploadpacket"]); // Rute untuk mengunggah paket baru
Route::post("/uploadtestimonial", [AdminController::class, "uploadtestimonial"]); // Rute untuk mengunggah testimonial baru

Route::get("/viewreservation/{order?}/{sort?}", [AdminController::class, "viewreservation"]); // Rute untuk melihat reservasi, dengan parameter opsional untuk pengurutan

Route::get("/viewpacket/{order?}/{sort?}", [AdminController::class, "viewpacket"]); // Rute untuk melihat paket, dengan parameter opsional untuk pengurutan

Route::get("/viewtestimonial/{order?}/{sort?}", [AdminController::class, "viewtestimonial"]); // Rute untuk melihat testimonial, dengan parameter opsional untuk pengurutan

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]); // Rute untuk menghapus pengguna berdasarkan ID

Route::get("/updateview/{id}", [AdminController::class, "updateview"]); // Rute untuk melihat halaman pembaruan berdasarkan ID

Route::get("/updatepacket/{id}", [AdminController::class, "updatepacket"]); // Rute untuk memperbarui paket berdasarkan ID

Route::get("/updatetestimonial/{id}", [AdminController::class, "updatetestimonial"]); // Rute untuk memperbarui testimonial berdasarkan ID

Route::post("/updatefoodpacket/{id}", [AdminController::class, "updatefoodpacket"]); // Rute untuk memperbarui paket makanan berdasarkan ID

Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]); // Rute untuk mengkonfirmasi pesanan

Route::get("/deletepacket/{id}", [AdminController::class, "deletepacket"]); // Rute untuk menghapus paket berdasarkan ID

Route::get("/deletetestimonial/{id}", [AdminController::class, "deletetestimonial"]); // Rute untuk menghapus testimonial berdasarkan ID

Route::post("/addcart/{id}", [HomeController::class, "addcart"]); // Rute untuk menambahkan item ke keranjang belanja berdasarkan ID

Route::get("/showcart/{id}", [HomeController::class, "showcart"]); // Rute untuk menampilkan isi keranjang belanja berdasarkan ID pengguna

Route::get("/remove/{id}", [HomeController::class, "remove"]); // Rute untuk menghapus item dari keranjang belanja berdasarkan ID item

Route::get("/orders/{order?}/{sort?}", [AdminController::class, "orders"]); // Rute untuk melihat pesanan, dengan parameter opsional untuk pengurutan

Route::get("/search", [AdminController::class, "search"]); // Rute untuk pencarian

Route::get("/bestseller/{tags}", [HomeController::class, "bestseller"]); // Rute untuk melihat produk terlaris berdasarkan tag
Route::get("/signature/{tags}", [HomeController::class, "signature"]); // Rute untuk melihat produk signature berdasarkan tag
Route::get("/oriental/{tags}", [HomeController::class, "oriental"]); // Rute untuk melihat produk oriental berdasarkan tag

Route::post("/contact", [HomeController::class, "contact"]);
Route::get("/all_messages/{order?}/{sort?}", [AdminController::class, "all_messages"]);
Route::get("/send_mail/{id}", [AdminController::class, "send_mail"]);
Route::post("/mail/{id}", [AdminController::class, "mail"]);
Route::get("/redirects", [HomeController::class, "redirects"])->name("redirects"); // Rute untuk pengalihan, dengan nama rute "redirects"

Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified",
])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard"); // Rute untuk dashboard yang memerlukan middleware autentikasi
});

Route::get("/payments", [AdminController::class, "payment"])->name("payments"); // Rute untuk halaman pembayaran, dengan nama rute "payments"
Route::get("/payments/status", [AdminController::class, "paymentStatus"]); // Rute untuk status pembayaran

Route::get("/history/{id}", [HomeController::class, "history"]); // Rute untuk melihat riwayat berdasarkan ID pengguna


?>
