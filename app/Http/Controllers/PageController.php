<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM : 2141720230", "<br>", "Nama : Ilham Khalis Putra Agatha", "<br>",  "Kelas : 2H";
    }

    public function articles($id){
        echo "Ini merupakan halaman artikel dengan id $id";
    }   
}
