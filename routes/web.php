<?php

use App\Http\Controllers\AsesorController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SkemasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageAsesorController;
use App\Http\Controllers\ManageBeritaController;
use App\Http\Controllers\ManageJadwalController;
use App\Http\Controllers\ManageSkemaController;
use App\Http\Controllers\UnitkompetensiController;
use Illuminate\Support\Facades\Route;
use App\Models\Skema;
use App\Models\Asesor;
use App\Models\Jadwal;
use App\Models\Berita;
use App\Models\Nowa;
use App\Models\Pelaksana;
use App\Models\Pengurus;

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

Route::get('/', function () {
    return view('home', [
        'jumlah_skema' => Skema::count(),
        'jumlah_asesor' => Asesor::count(),
        'jadwals' => Jadwal::orderBy('daftar_mulai', 'desc')->take(3)->get(),
        'beritas' => Berita::orderBy('created_at','desc')->take(3)->get(),
        'nowa' => Nowa::where('key', 'WA')->get()
    ]);
})->name('/');
Route::get('/profile', function () {
    return view('profile', [
       'penguruses' => Pengurus::all(),
       'pelaksanas' => Pelaksana::all()
    ]);
});

Route::get('/asesor', [AsesorController::class, 'index']);
Route::resource('/skema', SkemasController::class);
Route::resource('/jadwal', JadwalController::class);
Route::resource('/berita', BeritaController::class);



Route::get('/adminlogin', [LoginController::class, 'index'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::resource('/admin/skema', ManageSkemaController::class)->middleware('auth');
Route::resource('/admin/asesor', ManageAsesorController::class)->middleware('auth');
Route::resource('/admin/unitkompetensi', UnitkompetensiController::class)->middleware('auth');
Route::resource('/admin/berita', ManageBeritaController::class)->middleware('auth');
Route::resource('/admin/jadwal', ManageJadwalController::class)->middleware('auth');


