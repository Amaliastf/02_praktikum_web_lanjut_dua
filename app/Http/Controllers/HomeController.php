<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }

    public function about() {
        return '2141720228 Amalia Salsa Lutfiana';
        }

    public function articles($id) {
        echo 'Halaman Artikel Dengan Id ' . $id;
        }
}
