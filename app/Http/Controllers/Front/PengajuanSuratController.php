<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        return Inertia::render('PengajuanSurat');
    }
}
