<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
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

Route::get('/', function () {
    return view('user.welcome');
});



Auth::routes();

// Home Routes
Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Profil Routes
Route::group(['prefix' => 'profil'], function () {
    Route::group(['prefix' => 'sejarah'], function () {
        Route::get('sejarah-pdl', [UserController::class, 'sejarahPadalarang'])->name('sejarahPadalarang');
        Route::get('sejarah-dira', [UserController::class, 'sejarahDira'])->name('sejarahDira');
    });

    Route::group(['prefix' => 'atribute'], function () {
        Route::get('lambang', [UserController::class, 'lambangPdl'])->name('lambangPdl');
        Route::get('sandi', [UserController::class, 'sandiDira'])->name('sandiDira');
    });

    Route::get('data-potensi', [UserController::class, 'dataPotensi'])->name('dataPotensi');
});

// Organisasi Routes
Route::group(['prefix' => 'organisasi'], function () {
    Route::group(['prefix' => 'kepengurusan'], function () {
        Route::get('kwartir-ranting', [UserController::class, 'dewanKerja'])->name('dewanKerja');
        Route::get('dewan-kerja', [UserController::class, 'kwartirRanting'])->name('kwartirRanting');
    });

    Route::group(['prefix' => 'satuan-karya'], function () {
        Route::get('detail', [UserController::class, 'detailSaka'])->name('detailSaka');
        // Route::get('bhayangkara', [UserController::class, 'sakaBhaya'])->name('sakaBhaya');
        // Route::get('adhiyasta', [UserController::class, 'sakaAdhi'])->name('sakaAdhi');
    });

    Route::group(['prefix' => 'unit-kerja'], function () {
        Route::get('detailUnit', [UserController::class, 'detailUnit'])->name('detailUnit');
    });
});

// Info Routes
Route::group(['prefix' => 'info'], function () {
    Route::get('kegiatan', [UserController::class, 'kegiatan'])->name('kegiatan');
    Route::get('informasi-terkini', [UserController::class, 'infoTerkini'])->name('infoTerkini');
    Route::get('hubungi-kami', [UserController::class, 'hubungiKami'])->name('hubungiKami');
});

Route::prefix('admin')->middleware('isAuth')->group(function () {
    Route::resource('kategoris', KategoriController::class);
});


Route::resource('sekolahs', App\Http\Controllers\SekolahController::class);


Route::resource('schools', App\Http\Controllers\SchoolsController::class);
