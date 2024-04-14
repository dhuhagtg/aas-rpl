<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

use Inertia\Inertia;

class BeritaController extends Controller
{
    public function index()
    {
        return Inertia::render('Berita');
    }
    public function list()
    {
        return Berita::all();
    }
}