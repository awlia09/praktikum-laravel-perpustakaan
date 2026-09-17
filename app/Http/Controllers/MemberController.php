<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['name' => 'Aulia', 'role' => 'Mahasiswa', 'status' => 'Aktif'],
            ['name' => 'Budi', 'role' => 'Dosen', 'status' => 'Aktif'],
            ['name' => 'Siti', 'role' => 'Mahasiswa', 'status' => 'Non-Aktif'],
        ];

        return view('members.index', compact('members'));
    }
}