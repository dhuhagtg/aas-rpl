<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

use Inertia\Inertia;

class GaleriController extends Controller
{
    public function index()
    {
        return Inertia::render('Galeri');
    }
    public function list()
    {
        return Galeri::all();
    }
}