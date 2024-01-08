<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NewsController;
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
    // Mengambil data dari API
    $apiResponse = Http::get('http://127.0.0.1:3000/news/');

    // Memeriksa apakah permintaan berhasil
    if ($apiResponse->successful()) {
        // Mendapatkan data dari response
        $newsData = $apiResponse->json();

        // Mengirim data ke view 'user.welcome'
        return view('user.welcome', ['newsData' => $newsData]);
    } else {
        // Jika permintaan gagal, tindakan yang sesuai
        return "Failed to fetch news data!";
    }
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
        Route::get('dewan-kerja', [UserController::class, 'dewanKerja'])->name('dewanKerja');
        Route::get('kwartir-ranting', [UserController::class, 'kwartirRanting'])->name('kwartirRanting');
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
    Route::get('news', [UserController::class, 'news'])->name('news');
    Route::get('news/detail/{id}', [UserController::class, 'detailNewsUser'])->name('detailNewsUser');
    Route::get('informasi-terkini', [UserController::class, 'infoTerkini'])->name('infoTerkini');
    Route::get('hubungi-kami', [UserController::class, 'hubungiKami'])->name('hubungiKami');
});

Route::prefix('admin')->middleware('isAuth')->group(function () {
    Route::resource('kategoris', KategoriController::class);
    Route::resource('sekolahs', App\Http\Controllers\SekolahController::class);
    Route::resource('schools', App\Http\Controllers\SchoolsController::class);
    Route::resource('news', App\Http\Controllers\NewsController::class);
});

