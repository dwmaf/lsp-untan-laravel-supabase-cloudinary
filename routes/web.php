<?php

use App\Http\Controllers\AsesorController;
use App\Http\Controllers\PenerimaSertifController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageAsesorController;
use App\Http\Controllers\ManageSkemaController;
use Illuminate\Support\Facades\Route;
use App\Models\Skema;
use App\Models\Asesor;
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
        'jumlah_asesor' => Asesor::count()
    ]);
})->name('/');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/skema', [SkemaController::class, 'index']);
Route::get('/asesor', [AsesorController::class, 'index']);
// Route::get('/certiholder', [PenerimaSertifController::class, 'index']);
// Route::get('/alur', function () {
//     return view('alur');
// });


Route::get('/adminlogin', [LoginController::class, 'index'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::resource('/admin/skema', ManageSkemaController::class)->middleware('auth');
Route::resource('/admin/asesor', ManageAsesorController::class)->middleware('auth');