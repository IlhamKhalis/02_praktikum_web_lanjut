<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        echo "Ini merupakan halaman artikel dengan id $id";
    } 
}
