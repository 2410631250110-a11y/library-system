<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Daftar Kategori';

        $categories = [
            'Pemrograman',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Informasi',
            'Algoritma',
        ];

        return view('categories.index', compact('title', 'categories'));
    }
}