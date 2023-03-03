<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function productHome()
    {
        return view("product");
    }

    public function product($id)
    {
        if ($id == 1) {
            return redirect("https://www.educastudio.com/category/marbel-edu-games");
        } else if ($id == 2) {
            return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
        } else if ($id == 3) {
            return redirect("https://www.educastudio.com/category/riri-story-books");
        } else if ($id == 4) {
            return redirect("https://www.educastudio.com/category/kolak-kids-songs");
        }
    }

    public function newsHome()
    {
        return view("news");
    }

    public function news($id)
    {
        if ($id == 1) {
            return redirect("https://www.educastudio.com/news");
        } else if ($id == 2) {
            return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19");
        }
    }

    public function program()
    {
        return view("program");
    }

    public function about_us()
    {
        return view("about-us");
    }

    public function contact_us()
    {
        return view("contact-us");
    }
    
    // public function index(){
    //     echo "Selamat Datang";
    // }

    // public function about(){
    //     echo "NIM : 2141720230", "<br>", "Nama : Ilham Khalis Putra Agatha", "<br>",  "Kelas : 2H";
    // }

    // public function articles($id){
    //     echo "Ini merupakan halaman artikel dengan id $id";
    // }   
}
