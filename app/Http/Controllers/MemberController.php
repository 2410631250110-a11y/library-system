<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Daftar Anggota';

        $members = [
            'Andi',
            'Budi',
            'Citra',
            'Dewi',
            'Eko',
        ];

        return view('members.index', compact('title', 'members'));
    }
}