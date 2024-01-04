<?php

use App\Http\Controllers\ControllerBeranda;
use App\Http\Controllers\ControllerFeedback;
use App\Http\Controllers\ControllerInformasi;
use App\Http\Controllers\ControllerTiketBatal;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardWisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;

use App\Models\tiket;

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
Route::get('/', [LoginController::class, 'index'])->name('index');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login/akun', [LoginController::class, 'Login2']);
    Route::resource('/register', LoginController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('cek_login:admin')->group(function () {
        Route::get('dashboard',[DashboardController::class,'index']);
        Route::resource('/wisata',DashboardWisataController::class);
        Route::get('/customer/cari', [CustomerController::class, 'cari']);
        Route::resource('/customer', CustomerController::class);
        Route::get('/customer/cari', [CustomerController::class, 'cari']);
        Route::resource('/tiket', TiketController::class);
        Route::resource('/feedback', FeedbackController::class)->except('store');
    });

    Route::middleware('cek_login:editor')->group(function () {
        Route::get('/beranda',[ControllerBeranda::class,'index']);
        Route::get('/informasi',[ControllerInformasi::class,'index']);
        Route::get('/feedbackPage',[ControllerFeedback::class,'index']);
        Route::post('/feedback', [FeedbackController::class, 'store']);
        Route::get('/pembatalan',[ControllerTiketBatal::class,'index']);
        Route::get('/profil', [ProfilController::class, 'index']);
        Route::put('/profil', [ProfilController::class, 'update'])->name('profil.update');
        Route::get('/profil/edit', [ProfilController::class, 'edit']);
        Route::get('/tiket/create/{id}',[TiketController::class,'create'])->name('create');
        Route::get('/tiket/batal/{kode}',[TiketController::class,'cari2'])->name('batal');
    });

});

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('admin', DashboardController::class);
//     });
//     Route::group(['middleware' => ['cek_login:editor']], function () {
//         Route::resource('editor', ControllerBeranda::class);
//         // Route::get('/profil', function () {
//         //     $customers = Customer::with('customer')->get();
//         //     return view('profil', ['customer' => $customers]);
//         // })->name('profil');
//     });
// });
