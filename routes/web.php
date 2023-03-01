<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PageController;

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

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "NIM : 2141720230", "<br>", "Nama : Ilham Khalis Putra Agatha", "<br>",  "Kelas : 2H";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini merupakan halaman artikel dengan id $id";
});

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);