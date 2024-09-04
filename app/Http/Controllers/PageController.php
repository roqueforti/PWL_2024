<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datag';
    }

    public function about() {
        return '2241760051 - Hilman';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
