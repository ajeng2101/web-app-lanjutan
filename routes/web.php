<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
	return "Nama Saya <b>Tenri Ajeng</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Controller baru 1 */
use App\Http\Controllers\NewClaraController;
Route::get("/new/tenri", [NewClaraController::class, "tenri"]);
Route::get("/new/ajeng", [NewClaraController::class, "ajeng"]);
Route::get("/new/tenri", [NewClaraController::class, "tenri"]);

/* Controller baru 2 */
use App\Http\Controllers\TenriAjengController;
Route::get("ajeng/ready", [TenriAjengController::class, "ready"]);
Route::get("ajeng/mulai", [TenriAjengController::class, "mulai"]);
Route::get("ajeng/tugas", [TenriAjengController::class, "tugas"]);

/* router dan URL baru */
Route::get("/ajeng", function () {
	return "Tenri Ajeng Tonasa 21 Januari 2000";
});

Route::get("/alamat", function () {
	return "Tenri tinggal di jalan A.W.Syahrani";
});

Route::get("/Hobby", function () {
	return "Badminton <i><b>";
});

Route::get("/kuliah", function () {
	return "Tenri kuliah di<u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/ajeng1", function () {
	return "Tenri Ajeng Mahasiswa Semester 5";
});