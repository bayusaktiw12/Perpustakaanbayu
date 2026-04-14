<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuController extends Controller
{
     public function index()
    {
        return view('page.frontend.buku.index');
    }
}
