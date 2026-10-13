<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Data dinamis berupa array (Requirement 5)
        $data = [
            'judul' => 'Halaman Utama',
            'deskripsi' => 'Selamat datang di tugas rutin 9 Laravel.'
        ];
        return view('welcome', compact('data'));
    }

    public function about()
    {
        $anggota = ['Budi', 'Siti', 'Andi'];
        return view('about', ['judul' => 'Tentang Kami', 'anggota' => $anggota]);
    }

    public function contact()
    {
        return view('contact', ['judul' => 'Hubungi Kami']);
    }
}