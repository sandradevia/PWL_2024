<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Nama : Sandra Devia Arge <br> NIM  : 2241720222';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}
