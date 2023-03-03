<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 2141720230", "<br>", "Nama : Ilham Khalis Putra Agatha", "<br>",  "Kelas : 2H";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini merupakan halaman artikel dengan id $id";
// });

// Route::get('/index', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [PageController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/', [PageController::class, "productHome"]);
    Route::get('{id}', [PageController::class, "product"]);
});

Route::get('/news', [PageController::class, "newsHome"]);
Route::get('/news/{id}', [PageController::class, "news"]);

Route::prefix('program')->group(function () {
    Route::get('/', [PageController::class, "program"]);
    Route::get('/karir', function () {
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function () {
        return redirect("https: //www.educastudio.com/program/magang");
    });
    Route::get('/kunjungan', function () {
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

Route::get('/contact', [PageController::class, 'contact_us']);

Route::get('/about', [PageController::class, 'about_us']);
