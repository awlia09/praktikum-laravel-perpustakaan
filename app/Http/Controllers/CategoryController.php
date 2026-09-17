<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ['Novel', 'Sejarah', 'Pengembangan Diri', 'Sains', 'Teknologi'];

        return view('categories.index', compact('categories'));
    }
}